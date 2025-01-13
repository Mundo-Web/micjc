<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Address;
use App\Models\AddressUser;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Blog;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\ClientLogos;
use App\Models\DetalleOrden;
use App\Models\Marca;
use App\Models\Ordenes;
use App\Models\politycsCondition;
use App\Models\Price;
use App\Models\Sale;
use App\Models\Specifications;
use App\Models\SubCategoria;
use App\Models\termsCondition;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\isNull;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $productos = Products::all();
    $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $productos = Products::with('tags')->get();
    $productosDestacados = Products::where('status', '=', 1)->where('visible', '=', 1)->where('destacar', '=', 1)->orderBy('id', 'DESC')->limit(5)->get();
    $ofertasProductos = Products::where('status', '=', 1)->where('visible', '=', 1)->where('liquidacion', '=', 1)->orderBy('id', 'DESC')->get();
    $cyber = Products::where('status', '=', 1)->where('visible', '=', 1)->where('cyber', '=', 1)->orderBy('id', 'DESC')->get();

    $general = General::all()->first();

    $testimonios = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();
    $blog = Blog::where('status', '=', 1)->where('visible', '=', 1)->orderBy('id', 'DESC')->limit(3)->get();

    $logos = Marca::where('status', 1)->where('visible', '=', 1)->get();
    $banners = ClientLogos::where('status', 1)->get();
    $category = Category::where('status', '=', 1)->where('visible', '=', 1)->where('destacar', '=', 1)->get();

    return view('public.index', compact('cyber', 'banners', 'productos', 'general', 'testimonios', 'slider', 'logos', 'category', 'productosDestacados', 'ofertasProductos', 'blog'));
  }

  public function catalogo(Request $request)
  {

    $categoria = $request->input('cat');
    $subcategoria = $request->input('subcat');
    $marca = $request->input('marca');
    $orden = $request->input('order');
    $search = $request->input('search');


    $general = General::all()->first();
    $productos = Products::select('products.*')->where('status', '1');

    if (isset($categoria)) {
      $productos->where('categoria_id', $categoria);
    }
    if (isset($subcategoria)) {
      $productos->where('sub_cat_id', $subcategoria);
    }
    if (isset($marca)) {
      $productos->where('marca_id', $marca);
    }

    if (isset($search)) {
      $productos->where('producto', 'like', '%' . $search . '%');
    }

    if (isset($orden)) {
      if ($orden === 'mayorAmenor') {
        $productos->orderBy('id', 'DESC');
      } elseif ($orden === 'menorAmayor') {
        $productos->orderBy('id', 'ASC');
      } elseif ($orden === 'nameAsc') {
        $productos->orderBy('producto', 'ASC');
      } elseif ($orden === 'nameDesc') {
        $productos->orderBy('producto', 'DESC');
      }
    }
    $productos = $productos->paginate(12);



    $categorias = Category::join('products', 'products.categoria_id', '=', 'categories.id')
      ->select('categories.id', 'categories.name')
      ->distinct()->get();

    // $SubCategorias = SubCategoria::where('status','1')->where('visible','1')->get();
    $marcas = Marca::where('status', '1')->where('visible', '1')->get();



    $valoresAttr = AttributesValues::all();
    return view('public.catalogo', compact('general', 'productos', 'categorias', 'valoresAttr',  'marcas'));
  }

  public function producto(Request $request, String $id)
  {

    $general = General::all()->first();

    $producto = Products::find($id);
    $especificaciones = Specifications::where('product_id', '=', $id)->get();


    $productosRelacionados = Products::where('marca_id', '=', $producto->marca_id)->where('id', '!=', $id)->paginate(4);

    return view('public.producto', compact('general', 'producto', 'especificaciones', 'productosRelacionados'));
  }

  public function blog($filtro)
  {
    try {
      $categorias = Category::where('status', '=', 1)->where('visible', '=', 1)->get();
      $general = General::first();
      if ($filtro == 0) {

        $categoria = Category::where('status', '=', 1)->where('visible', '=', 1)->get();

        $lastposts = Blog::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->orderBy('created_at', 'desc')
          ->take(2)
          ->get();



        $posts = Blog::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->orderBy('created_at', 'desc')
          ->skip(2)
          ->limit(500)
          ->get();
      } else {

        $categoria = Category::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->where('id', '=', $filtro)
          ->orderBy('created_at', 'desc')
          ->get();

        $lastposts = Blog::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->where('category_id', '=', $filtro)
          ->orderBy('created_at', 'desc')
          ->take(2)
          ->get();

        $posts = Blog::where('status', '=', 1)
          ->where('visible', '=', 1)
          ->where('category_id', '=', $filtro)
          ->orderBy('created_at', 'desc')
          ->skip(2)
          ->limit(500)
          ->get();
      }

      return view('public.blog', compact('general', 'posts', 'categoria', 'categorias', 'filtro', 'lastposts'));
    } catch (\Throwable $th) {
    }
  }

  public function post(string $id)
  {
    $general = General::all()->first();
    $lastBlogs = Blog::where('status', '=', 1)->where('visible', '=', 1)->orderBy('id', 'desc')->limit(3)->get();

    $blog = Blog::find($id);
    return view('public.post', compact('blog', 'general', 'lastBlogs'));
  }

  public function contacto()
  {
    $general = General::all()->first();
    return view('public.contacto', compact('general'));
  }

  public function carrito()
  {
    $general = General::all()->first();
    $departamentos = DB::table('departments')->get();

    $departments = Price::select([
      'departments.id AS id',
      'departments.description AS description',
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->join('departments', 'departments.id', 'provinces.department_id')
      ->where('departments.active', 1)
      ->where('status', 1)
      ->groupBy('id', 'description')
      ->get();

    $provinces = Price::select([
      'provinces.id AS id',
      'provinces.description AS description',
      'provinces.department_id AS department_id'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->where('provinces.active', 1)
      ->groupBy('id', 'description', 'department_id')
      ->get();

    $districts = Price::select([
      'districts.id AS id',
      'districts.description AS description',
      'districts.province_id AS province_id',
      'prices.id AS price_id',
      'prices.price AS price'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->where('districts.active', 1)
      ->groupBy('id', 'description', 'province_id', 'price', 'price_id')
      ->get();

    return view('public.carrito', compact('general', 'departamentos', 'departments', 'provinces', 'districts'));
  }

  /* public function detallesPago(Request $request)
  {
    $formToken = $request->input('token');
    $codigoCompra = $request->input('codigoCompra');

    $detalleUsuario = [];
    $user = auth()->user();
    $N_orden = Ordenes::where('codigo_orden', '=', $codigoCompra)->get()->toArray();
   
    $detalleUsuario = UserDetails::where('id', $N_orden[0]['usuario_id'])->get();

    $distritos = DB::select('select * from districts where active = ? order by 3', [1]);
    $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);
    $departamento = DB::select('select * from departments where active = ? order by 2', [1]);

    $addresDetail = AddressUser::find($N_orden[0]['address_id']);


    //consultar n orden
    // traer los datos necesarios para armar el token
    // $formToken =  $this->generateFormTokenIzipay();

    $url_env = $_ENV['APP_URL'];
    $general = General::all()->first();
    return view('public.detallesPago', compact('codigoCompra', 'general', 'detalleUsuario', 'distritos', 'provincias', 'departamento', 'N_orden', 'addresDetail'));
  } */

  public function detallesPago()
  {
    //
    $detalleUsuario = [];
    $user = auth()->user();
    $general = General::all()->first();

    if (!is_null($user)) {
      $detalleUsuario = UserDetails::where('email', $user->email)->get();
    }

    // $departamento = DB::select('select * from departments where active = ? order by 2', [1]);
    $departments = Price::select([
      'departments.id AS id',
      'departments.description AS description',
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->join('departments', 'departments.id', 'provinces.department_id')
      ->where('departments.active', 1)
      ->where('status', 1)
      ->groupBy('id', 'description')
      ->get();

    $provinces = Price::select([
      'provinces.id AS id',
      'provinces.description AS description',
      'provinces.department_id AS department_id'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->where('provinces.active', 1)
      ->groupBy('id', 'description', 'department_id')
      ->get();

    $districts = Price::select([
      'districts.id AS id',
      'districts.description AS description',
      'districts.province_id AS province_id',
      'prices.id AS price_id',
      'prices.price AS price'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->where('districts.active', 1)
      ->groupBy('id', 'description', 'province_id', 'price', 'price_id')
      ->get();

    // $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
    // $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);

    $categorias = Category::all();

    $destacados = Products::where('destacar', '=', 1)->where('status', '=', 1)
      ->where('visible', '=', 1)->with('tags')->activeDestacado()->get();


    $url_env = env('APP_URL');
    $culqi_public_key = env('CULQI_PUBLIC_KEY');

    $addresses = [];
    $hasDefaultAddress = false;
    if (Auth::check()) {
      $addresses = Address::with([
        'price',
        'price.district',
        'price.district.province',
        'price.district.province.department'
      ])
        ->where('email', $user->email)
        ->get();
      $hasDefaultAddress = Address::where('email', $user->email)
        ->where('isDefault', true)
        ->exists();
    }

    return view('public.detallesPago', compact(
      'url_env',
      'districts',
      'provinces',
      'departments',
      'detalleUsuario',
      'categorias',
      'destacados',
      'culqi_public_key',
      'addresses',
      'hasDefaultAddress',
      'general'
    ));
  }

  public function exito(Request $request)
  {
    $codigoCompra = $request->input('codigoCompra');
    $url_env = $_ENV['APP_URL'];
    $general = General::all()->first();
    $ordenes = Ordenes::where('codigo_orden', '=', $codigoCompra)->update(['status_id' => 2]);

    return view('public.exito', compact('general', 'url_env', 'codigoCompra'));
  }

  public function miCuenta()
  {
    $user = Auth::user();
    $userDetail = UserDetails::where('email', $user->email)->first();
    $general = General::all()->first();

    return view('public.miCuenta', compact('general', 'user', 'userDetail'));
  }

  public function miDireccion()
  {
    $user = Auth::user();

    $usuarioDetall = UserDetails::where('email', $user->email)->first();

    $direcciones = AddressUser::where('user_id', $usuarioDetall->id)->get();
    $departamentofiltro = DB::select('select * from departments where active = ? order by 2', [1]);
    $departamento = DB::select('select * from departments where active = ? order by 2', [1]);

    foreach ($direcciones as $direccion) {
      $distrito = DB::table('districts')->where('id', $direccion->distrito_id)->first();
      $provincia = DB::table('provinces')->where('id', $direccion->provincia_id)->first();
      $departamento = DB::table('departments')->where('id', $direccion->departamento_id)->first();



      $direccion->distrito_id = $distrito ? $distrito->description : '';
      $direccion->provincia_id = $provincia ? $provincia->description : '';
      $direccion->departamento_id = $departamento ? $departamento->description : '';
    }

    $general = General::all()->first();
    return view('public.miDireccion', compact('general', 'direcciones', 'departamento', 'departamentofiltro'));
  }

  public function historial()
  {

    $user = Auth::user();
    $general = General::all()->first();

    $detalleUsuario = UserDetails::where('email', $user->email)
      ->get()
      ->toArray();

    $ordenes = Sale::where('usuario_id', Auth::user()->id)
      ->with('DetalleOrden')
      ->with('statusOrdenes')
      ->get();
    return view('public.historial', compact('general', 'ordenes', 'detalleUsuario'));
  }

  public function listadeseos()
  {
    $user = Auth::user();


    $usuario = User::find($user->id);

    $wishlistItems = $usuario->wishlistItems()->with('products')->get();
    $arrayWishlist = $wishlistItems->toArray();
    $array = [];
    foreach ($arrayWishlist as $key => $value) {
      $array[] = $value['products']['id'];
    }

    $general = General::all()->first();


    $productos = Products::with('tags')->whereIn('id', $array)->get();
    return view('public.dashboard_wishlist', compact('user', 'wishlistItems', 'productos', 'general'));
  }

  public function direccion()
  {
    $user = Auth::user();
    $addresses = Address::with([
      'price.district',
      'price.district.province',
      'price.district.province.department'
    ])
      ->where('email', $user->email)
      ->get();

    $departments = Price::select([
      'departments.id AS id',
      'departments.description AS description',
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->join('departments', 'departments.id', 'provinces.department_id')
      ->where('departments.active', 1)
      ->groupBy('id', 'description')
      ->get();

    $provinces = Price::select([
      'provinces.id AS id',
      'provinces.description AS description',
      'provinces.department_id AS department_id'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->join('provinces', 'provinces.id', 'districts.province_id')
      ->where('provinces.active', 1)
      ->groupBy('id', 'description', 'department_id')
      ->get();

    $districts = Price::select([
      'districts.id AS id',
      'districts.description AS description',
      'districts.province_id AS province_id',
      'prices.id AS price_id',
      'prices.price AS price'
    ])
      ->join('districts', 'districts.id', 'prices.distrito_id')
      ->where('districts.active', 1)
      ->groupBy('id', 'description', 'province_id', 'price', 'price_id')
      ->get();
    $categorias = Category::all();

    $general = General::all()->first();

    return view('public.dashboard_direccion', compact('user', 'addresses', 'categorias', 'departments', 'provinces', 'districts', 'general'));
  }

  public function crearCuenta()
  {
    return view('public.crearCuenta');
  }

  public function ingresar()
  {
    return view('public.ingresar');
  }

  public function olvide()
  {
    return view('public.olvide');
  }

  public function restaurar()
  {
    return view('public.restaurar');
  }

  public function procesarCarrito(Request $request)
  {
    $primeraVez = false;




    try {
      $codigoOrden = $this->codigoVentaAleatorio();
      $jsonMonto = json_decode($request->total, true);
      $montoT = $jsonMonto['total'];
      $subMonto = $jsonMonto['suma'];

      $precioEnvio = $montoT - $subMonto;
      $email = $request->email;

      $usuario = null;
      $addres = null;
      if ($email) {
        $usuario = UserDetails::where('email', '=', $email)->get(); // obtenemos usuario para validarlo si no agregarlo

        //si tiene usuario registrad
        if (!$usuario->isNotEmpty()) {
          $usuario = UserDetails::create(['email' => $email]);
          $primeraVez = true;
        }

        //agregar si tiene una direccion 
        $addres = AddressUser::create([
          'departamento_id' => (int)$request->departamento,
          'provincia_id' => (int)$request->provincia,
          'distrito_id' => (int)$request->distrito,
          'user_id' => $usuario[0]['id']
        ]);
      }



      $this->GuardarOrdenAndDetalleOrden($codigoOrden, $montoT, $precioEnvio, $usuario, $request->carrito, $addres);

      // Generar el token para izypay
      // $formToken = $this->generateFormTokenIzipay($montoT, $codigoOrden, $email);

      //
      return response()->json(['mensaje' => 'Orden generada correctamente',  'codigoOrden' => $codigoOrden, 'primeraVez' => $primeraVez]);
    } catch (\Throwable $th) {
      //throw $th;
      $message = $th->getMessage();
      return response()->json(['mensaje' => "Intente de nuevo mas tarde , estamos trabajando en una solucion , $message"], 400);
    }
  }
  private function GuardarOrdenAndDetalleOrden($codigoOrden, $montoT, $precioEnvio, $usuario = null, $carrito, $addres = null)
  {

    $data['codigo_orden'] = $codigoOrden;
    $data['monto'] = $montoT;
    $data['precio_envio'] = $precioEnvio;
    $data['status_id'] = '1';
    $data['usuario_id'] = $usuario[0]['id'] ?? null;
    $data['address_id'] = $addres['id'] ?? null;

    $orden = Ordenes::create($data);

    //creamos detalle de orden
    foreach ($carrito as $key => $value) {
      DetalleOrden::create([
        'producto_id' => $value['id'],
        'cantidad' => $value['cantidad'],
        'orden_id' => $orden->id,
        'precio' => $value['precio'],

      ]);
    }
  }

  private function codigoVentaAleatorio()
  {
    $codigoAleatorio = '';


    $longitudCodigo = 10;


    for ($i = 0; $i < $longitudCodigo; $i++) {
      $codigoAleatorio .= mt_rand(0, 9);
    }
    return $codigoAleatorio;
  }

  public function pedidos()
  {
    $user = Auth::user();
    $categorias = Category::all();
    $statuses = [];
    $general = General::all()->first();
    return view('public.dashboard_order',  compact('user', 'categorias', 'statuses', 'general'));
  }

  public function procesarPago(Request $request)
  {

    $codigoAleatorio = $request->codigoCompra;

    $mensajes2compra = [
      'email.required' => 'El campo Email es obligatorio.',
      'nombre.required' => 'El campo Nombre es obligatorio.',
      'apellidos.required' => 'El campo Email es obligatorio.',
      'departamento_id.required ' => 'Seleccione un Departamento es obligatorio.',
      'provincia_id.required' => 'Seleccione una Provincia es obligatorio.',
      'distrito_id.required' => 'Seleccione un Distrito obligatorio.',
      'dir_av_calle.required' => 'El campo Avenida/Calle obligatorio.',
      'dir_numero.required' => 'El campo Numero es obligatorio.'
    ];

    try {
      $reglasPrimeraCompra = [
        'data.email' => 'required',
      ];
      $mensajes = [
        'email.required' => 'El campo Email es obligatorio.',

      ];
      $request->validate($reglasPrimeraCompra, $mensajes);

      $email = $request->data['email'];
      $existeUser = UserDetails::where('email', $email)->get()->toArray();

      if (count($existeUser) === 0) {
        $datos = $request->all();
        $datos = $datos['data'];
        UserDetails::create($datos);
        $this->guardarOrden();
        $this->envioCorreoCompra($datos);
        return response()->json(['message' => 'Data procesada correctamente', 'codigoCompra' => $codigoAleatorio],);
      } else {
        $existeUsuario = User::where('email', $email)->get()->toArray();

        if ($existeUsuario) {
          $validator = Validator::make($request->all(), [
            'data.email' => 'required',
            'data.nombre' => 'required',
            'data.apellidos' => 'required',
            // 'data.departamento_id' => 'required',
            // 'data.provincia_id' => 'required',
            // 'data.distrito_id' => 'required',
            'data.dir_av_calle' => 'required',
            'data.dir_numero' => 'required',
            'data.dir_bloq_lote' => 'required',

          ]);

          if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()], 422);
          } else {

            $data = $request->all();
            $datos = $data['data'];

            //Procesar Compra
            $userdetailU = UserDetails::where('email', $email)->first();
            $userdetailU->update($datos);

            $this->guardarOrden();
            $this->envioCorreoCompra($datos);
            return response()->json(['message' => 'Todos los datos estan correctos', 'codigoCompra' => $codigoAleatorio],);
          }
        } else {
          return response()->json(['errors' => 'El email ingresado no esta resgistrado en MIC JC. Por favor registrese e inicie session '], 422);
        }
      }
    } catch (\Throwable $th) {
      return response()->json(['errors' => $th->getMessage()], 400);
    }
  }

  private function guardarOrden() {}
  public function cambiofoto(Request $request)
  {


    $user = User::findOrFail($request->id);

    if ($request->hasFile("image")) {

      $file = $request->file('image');
      $route = 'storage/images/users/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      if (File::exists(storage_path() . '/app/public/' . $user->profile_photo_path)) {
        File::delete(storage_path() . '/app/public/' . $user->profile_photo_path);
      }

      $this->saveImg($file, $route, $nombreImagen);

      $routeforshow = 'images/users/';
      $user->profile_photo_path = $routeforshow . $nombreImagen;

      $user->save();

      return response()->json(['message' => 'La imagen se cargó correctamente.']);
    }
  }

  public function actualizarPerfil(Request $request)
  {

    $passChanged = false;
    try {
      $name = $request->name;
      $lastname = $request->lastname;
      $email = $request->email;
      $user = User::findOrFail($request->id);


      if ($request->password !== null || $request->newpassword !== null || $request->confirmnewpassword !== null) {
        if (!Hash::check($request->password, $user->password)) {
          $imprimir = "La contraseña actual no es correcta";
          $alert = "error";
          throw ValidationException::withMessages([
            'password' => 'La contraseña actual no es correcta.',
          ]);
        } else {
          $user->password = Hash::make($request->newpassword);
          $imprimir = "Cambio de contraseña exitosa";
          $alert = "success";
          $passChanged = true;
        }
      }


      if ($user->name == $name &&  $user->lastname == $lastname) {
        if ($passChanged) {
          $imprimir = "Cambio de contraseña exitosa";
        } else {
          $imprimir = "Sin datos que actualizar";
          $alert = "question";
        }
      } else {
        $user->name = $name;
        $user->lastname = $lastname;
        $alert = "success";
        $imprimir = "Datos actualizados";
      }


      $user->save();
      return response()->json(['message' => $imprimir, 'alert' => $alert]);
    } catch (\Throwable $th) {
      //throw $th;
      return response()->json(['message' => $imprimir, 'alert' => $alert], 400);
    }
  }

  public function politicaprivacidad()
  {
    $politicas = politycsCondition::first();
    $general = General::all()->first();
    return view('public.politicaPriv', compact('politicas', 'general'));
  }
  public function term_condiciones()
  {
    $terms = termsCondition::first();
    $general = General::all()->first();
    return view('public.termsCondiciones', compact('terms', 'general'));
  }

  public function librodereclamaciones()
  {
    $departamentofiltro = DB::select('select * from departments where active = ? order by 2', [1]);
    $general = General::all()->first();
    return view('public.librodereclamaciones', compact('departamentofiltro', 'general'));
  }
  public function obtenerProvincia($departmentId)
  {
    $provinces = DB::select('select * from provinces where active = ? and department_id = ? order by description', [1, $departmentId]);
    return response()->json($provinces);
  }

  public function obtenerDistritos($provinceId)
  {
    $distritos = DB::select('select * from districts where active = ? and province_id = ? order by description', [1, $provinceId]);
    return response()->json($distritos);
  }


  public function buscarProductos(Request $request)
  {
    $dato = $request->valorInput;
    $palabras = explode(' ', $dato);

    $skip = $request->skip;
    $take = $request->take;



    $productos = Products::where('status', '=', 1);

    foreach ($palabras as $key => $value) {
      # code...
      $productos = $productos->where('producto', 'like', "%$value%");
    }
    $productos = $productos->skip($skip)->take($take)->get();


    return response()->json(['message' => 'Busqueda realizada con exito ', 'data' => $productos]);
  }

  //  --------------------------------------------
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreIndexRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Index $index)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Index $index)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateIndexRequest $request, Index $index)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Index $index)
  {
    //
  }

  /**
   * Save contact from blade
   */
  public function guardarContacto(Request $request)
  {
    $data = $request->all();
    $data['full_name'] = $request->full_name;

    try {
      $reglasValidacion = [
        /* 'name' => 'required|string|max:255', */
        'email' => 'required|email|max:255',
      ];
      $mensajes = [
        'name.required' => 'El campo nombre es obligatorio.',
        'email.required' => 'El campo correo electrónico es obligatorio.',
        'email.email' => 'El formato del correo electrónico no es válido.',
        'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
      ];
      $request->validate($reglasValidacion, $mensajes);
      $formlanding = Message::create($data);
      // $this->envioCorreo($formlanding);
      // $this->envioCorreoInterno($formlanding);
      MailingController::notifyContact($formlanding);

      return response()->json(['message' => 'Mensaje enviado con exito']);
    } catch (ValidationException $e) {
      return response()->json(['message' => $e->validator->errors()], 400);
    }
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img = $manager->read($file);

    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }
    $img->save($route . $nombreImagen);
  }

  private function envioCorreo($data)
  {
    $name = $data['full_name'];
    $mensaje = 'Gracias por comunicarte con MIC&JC';
    $general = General::all()->first();
    $mail = EmailConfig::config($name, $mensaje);
    try {
      $mail->addAddress($data['email']);
      $mail->Body =
        '<html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>MIC&JC</title>
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                rel="stylesheet"
            />
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
            </style>
        </head>
        <body>
            <main>
                <table
                    style="
                        width: 600px;
                        height: 700px;
                        margin: 0 auto;
                        text-align: center;
                        background-image: url(https://micjc.mundoweb.pe/mailing/ImagenFondo.png);
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                    "
                >
                    <thead>
                        <tr>
                            <th
                                style="
                                    display: flex;
                                    flex-direction: row;
                                    justify-content: center;
                                    align-items: center;
                                    margin: 40px;
                                "
                            >
                                <img
                                    src="https://micjc.mundoweb.pe/mailing/Logo.png"
                                    alt="mundo web"
                                />
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="height: 10px">
                                <p
                                    style="
                                        color: #ffffff;
                                        font-weight: 500;
                                        font-size: 18px;
                                        text-align: center;
                                        width: 500px;
                                        margin: 0 auto;
                                        font-family: Montserrat, sans-serif;
                                        line-height: 30px;
                                    "
                                >
                                    <span style="display: block">Hola </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 10px">
                                <p
                                    style="
                                        color: #ffffff;
                                        font-size: 40px;
                                        font-family: Montserrat, sans-serif;
                                        line-height: 60px;
                                    "
                                >
                                    <span style="display: block"
                                        >' .
        $name .
        '
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 10px">
                                <p
                                    style="
                                        color: #ffffff;
                                        font-size: 30px;
                                        font-family: Montserrat, sans-serif;
                                        font-weight: bold;
                                        line-height: 60px;
                                    "
                                >
                                    ¡Gracias
                                    <span style="color: #ffffff"
                                        >por escribirnos!</span
                                    >
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 10px">
                                <p
                                    style="
                                        color: #ffffff;
                                        font-weight: 500;
                                        font-size: 15px;
                                        text-align: center;
                                        width: 250px;
                                        margin: 0 auto;
                                        font-family: Montserrat, sans-serif;
                                        line-height: 30px;
                                    "
                                >
                                    En breve estaremos comunicandonos contigo.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td
                                
                            >
                                <a
                                    href="https://micjc.mundoweb.pe/"
                                    style="
                                        text-decoration: none;
                                        background-color: #001232;
                                        color: white;
                                        padding: 15px 20px;
                                        display: inline-flex;
                                        justify-content: center;
                                        align-items: center;
                                        gap: 10px;
                                        font-weight: 600;
                                        font-family: Montserrat, sans-serif;
                                        font-size: 16px;
                                    "
                                >
                                    <span>Visita nuestra web</span>
                                </a>
                            </td>
                        </tr>
    
                        <tr>
                            <td style="text-align: center">
                                <img
                                    src="https://micjc.mundoweb.pe/mailing/producto.png"
                                    alt="mundo web"
                                    style="width: 80%"
                                />
                            </td>
                        </tr>

                        <tr>
            <td>
              <a
                href="https://' .
        htmlspecialchars($general->facebook, ENT_QUOTES, 'UTF-8') .
        '"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="https://micjc.mundoweb.pe/mailing/facebook.png" alt=""
              /></a>

              <a
                href="https://' .
        htmlspecialchars($general->instagram, ENT_QUOTES, 'UTF-8') .
        '"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="https://micjc.mundoweb.pe/mailing/instagram.png" alt=""
              /></a>

              <a
                href="https://' .
        htmlspecialchars($general->twitter, ENT_QUOTES, 'UTF-8') .
        '"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="https://micjc.mundoweb.pe/mailing/twitter.png" alt=""
              /></a>

              <a
                href="https://' .
        htmlspecialchars($general->linkedin, ENT_QUOTES, 'UTF-8') .
        '"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="https://micjc.mundoweb.pe/mailing/linkedin.png" alt=""
              /></a>

              <a
                href="https://' .
        htmlspecialchars($general->youtube, ENT_QUOTES, 'UTF-8') .
        '"
                target="_blank"
                style="padding: 0 5px 30px 0; display: inline-block"
              >
                <img src="https://micjc.mundoweb.pe/mailing/youtube.png" alt=""
              /></a>
            </td>
          </tr>
                    </tbody>
                </table>
            </main>
        </body>
    </html>
    
    ';
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  private function envioCorreoInterno($data)
  {
    $name = 'Tienes un nuevo mensaje' . ',';
    $general = General::all()->first();
    $mensaje = 'MIC&JC';
    $mail = EmailConfig::config($name, $mensaje);
    $emailCliente = General::all()->first();
    try {
      $mail->addAddress($emailCliente->email);
      $mail->Body = '<html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>MIC&JC</title>
              <link rel="preconnect" href="https://fonts.googleapis.com" />
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
              <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                rel="stylesheet"
              />
              <style>
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                }
              </style>
            </head>
            <body>
              <main>
                <table
                  style="
                    width: 600px;
                    height: 700px;
                    margin: 0 auto;
                    text-align: center;
                    background-image: url(https://micjc.mundoweb.pe/mailing/ImagenFondo.png);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                  "
                >
                  <thead>
                    <tr>
                      <th
                        style="
                          display: flex;
                          flex-direction: row;
                          justify-content: center;
                          align-items: center;
                          margin: 40px;
                        "
                      >
                        <img
                          src="https://micjc.mundoweb.pe/mailing/Logo.png"
                          alt="mundo web"
                        />
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="height: 10px">
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            font-family: Montserrat, sans-serif;
                            line-height: 30px;
                          "
                        >
                          <span style="display: block">Hola MIC&JC</span>
                          <span style="display: block">Tienes un nuevo mensaje</span>
                        </p>
                      </td>
                    </tr>
          
                    <tr>
                      <td>
                        <a
                          href="https://micjc.mundoweb.pe/"
                          style="
                            text-decoration: none;
                            background-color: #001232;
                            color: white;
                            padding: 15px 20px;
                            display: inline-flex;
                            justify-content: center;
                            align-items: center;
                            gap: 10px;
                            font-weight: 600;
                            font-family: Montserrat, sans-serif;
                            font-size: 16px;
                          "
                        >
                          <span>Visita nuestra web</span>
                        </a>
                      </td>
                    </tr>
          
                    <tr>
                      <td style="text-align: center">
                        <img
                          src="https://micjc.mundoweb.pe/mailing/producto.png"
                          alt="MICJC"
                          style="width: 80%"
                        />
                      </td>
                    </tr>
          
                    <tr>
                      <td>
                        <a
                          href="https://' .
        htmlspecialchars($general->facebook, ENT_QUOTES, 'UTF-8') .
        '"
                          target="_blank"
                          style="padding: 0 5px 30px 0; display: inline-block"
                        >
                          <img src="https://micjc.mundoweb.pe/mailing/facebook.png" alt=""
                        /></a>
          
                        <a
                          href="https://' .
        htmlspecialchars($general->instagram, ENT_QUOTES, 'UTF-8') .
        '"
                          target="_blank"
                          style="padding: 0 5px 30px 0; display: inline-block"
                        >
                          <img src="https://micjc.mundoweb.pe/mailing/instagram.png" alt=""
                        /></a>
          
                        <a
                          href="https://' .
        htmlspecialchars($general->twitter, ENT_QUOTES, 'UTF-8') .
        '"
                          target="_blank"
                          style="padding: 0 5px 30px 0; display: inline-block"
                        >
                          <img src="https://micjc.mundoweb.pe/mailing/twitter.png" alt=""
                        /></a>
          
                        <a
                          href="https://' .
        htmlspecialchars($general->linkedin, ENT_QUOTES, 'UTF-8') .
        '"
                          target="_blank"
                          style="padding: 0 5px 30px 0; display: inline-block"
                        >
                          <img src="https://micjc.mundoweb.pe/mailing/linkedin.png" alt=""
                        /></a>
          
                        <a
                          href="https://' .
        htmlspecialchars($general->youtube, ENT_QUOTES, 'UTF-8') .
        '"
                          target="_blank"
                          style="padding: 0 5px 30px 0; display: inline-block"
                        >
                          <img src="https://micjc.mundoweb.pe/mailing/youtube.png" alt=""
                        /></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </main>
            </body>
          </html>
          ';
      $mail->isHTML(true);
      $mail->send();
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
}
