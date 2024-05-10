<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\Specifications;
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
    $productos =  Products::with('tags')->get();
    $categorias = Category::all();
    $destacados = Products::where('destacar', '=', 1)->where('status', '=', 1)
    ->where('visible', '=', 1)->with('tags')->activeDestacado()->get();
    $descuentos = Products::where('descuento', '>', 0)->where('status', '=', 1)
    ->where('visible', '=', 1)->with('tags')->activeDestacado()->get();

    $general = General::all();
    $benefit = Strength::where('status', '=', 1)->get();
    $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();
    $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();
    $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
    $category = Category::where('status', '=', 1)->where('destacar', '=', 1)->get();



    return view('public.index', compact('productos', 'destacados', 'descuentos', 'general', 'benefit', 'faqs', 'testimonie', 'slider', 'categorias', 'category'));
  }

  public function catalogo(){
    
    return view('public.catalogo');
  }

  public function producto(){
    
    return view('public.producto');
  }

  public function blog(){
    
    return view('public.blog');
  }

  public function post(){
    
    return view('public.post');
  }

  public function contacto(){
    
    return view('public.contacto');
  }

  public function carrito(){
    
    return view('public.carrito');
  }

  public function detallesPago(){
    
    return view('public.detallesPago');
  }

  public function exito(){
    
    return view('public.exito');
  }

  public function miCuenta(){
    
    return view('public.miCuenta');
  }

  public function miDireccion(){
    
    return view('public.miDireccion');
  }

  public function historial(){
    
    return view('public.historial');
  }

  public function crearCuenta(){
    
    return view('public.crearCuenta');
  }

  public function ingresar(){
    
    return view('public.ingresar');
  }

  public function olvide(){
    
    return view('public.olvide');
  }

  public function restaurar(){
    
    return view('public.restaurar');
  }


  /* public function catalogo($filtro, Request $request)
  {
    $categorias = null;
    $productos = null;

    $rangefrom = $request->query('rangefrom');
    $rangeto = $request->query('rangeto');



    try {
      $general = General::all();
      $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();

      $categorias = Category::all();

      $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();



      if ($filtro == 0) {
        $productos = Products::paginate(3);
        $categoria = Category::all();
      } else {
        $productos = Products::where('categoria_id', '=', $filtro)->paginate(3);
        $categoria = Category::findOrFail($filtro);
      }



      if ($rangefrom !== null && $rangeto !== null) {

        if ($filtro == 0) {
          $productos = Products::all();
          $categoria = Category::all();
        } else {
          $productos = Products::where('categoria_id', '=', $filtro)->get();
          $categoria = Category::findOrFail($filtro);
        }

        $cleanedData = $productos->filter(function ($value) use ($rangefrom, $rangeto) {

          if ($value['descuento'] == 0) {

            if ($value['precio'] <= $rangeto && $value['precio'] >= $rangefrom) {
              return $value;
            }
          } else {

            if ($value['descuento'] <= $rangeto && $value['descuento'] >= $rangefrom) {
              return $value;
            }
          }
        });

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $productos = new LengthAwarePaginator(
          $cleanedData->forPage($currentPage, 3), 
          $cleanedData->count(), 
          3, 
          $currentPage, 
          ['path' => request()->url()] 
        );
      }



      return view('public.catalogo', compact('general', 'faqs', 'categorias', 'testimonie', 'filtro', 'productos', 'categoria', 'rangefrom', 'rangeto'));
    } catch (\Throwable $th) {
    }
  }

  public function comentario()
  {
    $comentarios = Testimony::where('status', '=' ,1)->where('visible', '=' ,1)->paginate(15);
    $contarcomentarios = count($comentarios);
    return view('public.comentario', compact('comentarios', 'contarcomentarios'));
  }

  public function hacerComentario(Request $request){
    $user = auth()->user();
    
    $newComentario = new Testimony();
    if (isset($user)) {
      $alert = null;
      $request->validate([
        'testimonie' => 'required',
    ], [
        'testimonie.required' => 'Ingresa tu comentario',
    ]);

        $newComentario->name = $user->name;
        $newComentario->testimonie = $request->testimonie;
        $newComentario->visible = 0;
        $newComentario->status = 1;
        $newComentario->email = $user->email;
        $newComentario->save();

        $mensaje = "Gracias. Tu comentario pasará por una validación y será publicado.";
        $alert = 1;

    }else{  
        $alert = 2;
        $mensaje = "Inicia sesión para hacer un comentario";
    }

    return redirect()->route('comentario')->with(['mensaje' => $mensaje, 'alerta' => $alert]);
  }

  public function contacto()
  {
    $general = General::all();
    return view('public.contact', compact('general'));
  }

  public function carrito()
  {
    //
    $url_env = $_ENV['APP_URL'];
    return view('public.checkout_carrito', compact('url_env'));
  }

  public function pago()
  {

    $detalleUsuario = [];
    $user = auth()->user();
    if (!isNull($user)) {
      $detalleUsuario = UserDetails::where('email', $user->email)->get();
    }
    $distritos  = DB::select('select * from districts where active = ? order by 3', [1]);
    $provincias = DB::select('select * from provinces where active = ? order by 3', [1]);
    $departamento = DB::select('select * from departments where active = ? order by 2', [1]);


    $url_env = $_ENV['APP_URL'];
    return view('public.checkout_pago', compact('url_env', 'distritos', 'provincias', 'departamento', 'detalleUsuario'));
  }

  public function procesarPago(Request $request)
  {

    $codigoAleatorio = '';
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
        'email' => 'required',
      ];
      $mensajes = [
        'email.required' => 'El campo Email es obligatorio.',

      ];
      $request->validate($reglasPrimeraCompra, $mensajes);

      $email = $request->email;
      $existeUser = UserDetails::where('email', $email)->get()->toArray();
      
      if (count($existeUser) === 0) {
        UserDetails::create($request->all());
        $datos = $request->all();
        $codigoAleatorio = $this->codigoVentaAleatorio();
        $this->guardarOrden();
        $this-> envioCorreoCompra($datos);
        return response()->json(['message' => 'Data procesada correctamente', 'codigoCompra' => $codigoAleatorio],);
      } else {
        $existeUsuario = User::where('email', $email)->get()->toArray();
       
        if ($existeUsuario) {
          $validator = Validator::make($request->all(), [
            'email' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required',
            'dir_av_calle' => 'required',
            'dir_numero' => 'required',
            'dir_bloq_lote' => 'required',
            
          ]);

          if ($validator->fails()) {
            
            return response()->json(['errors' => $validator->errors()], 422);
          } else {
            $datos = $request->all();
            //Procesar Compra
            $userdetailU = UserDetails::where('email', $email)->first();
            $userdetailU->update($request->all());

            $codigoAleatorio = $this->codigoVentaAleatorio();
            $this->guardarOrden();
            $this-> envioCorreoCompra($datos);
            return response()->json(['message' => 'Todos los datos estan correctos', 'codigoCompra' => $codigoAleatorio],);
          }
        } else {
          return response()->json(['errors' => 'Por favor registrese e inicie session '], 422);
        }
      }
    } catch (\Throwable $th) {
      
      return response()->json(['message' => $th], 400);
    }
  }

  private function guardarOrden()
  {
   
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

  public function agradecimiento()
  {
    //
    return view('public.checkout_agradecimiento');
  }

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

    $name= $request->name;
    $lastname = $request->lastname;
    $email = $request->email;
    $user = User::findOrFail($request->id);
    

    if($request->password !== null || $request->newpassword !== null || $request->confirmnewpassword !== null){ 
        if (!Hash::check($request->password, $user->password)) {
            $imprimir = "La contraseña actual no es correcta";
            $alert = "error";
        }else{
            $user->password = Hash::make($request->newpassword);
            $imprimir = "Cambio de contraseña exitosa";
            $alert = "success";
        }
    }
    

      if($user->name == $name &&  $user->lastname == $lastname ){
        $imprimir = "Sin datos que actualizar";
        $alert = "question";  
      }else{
        $user->name = $name;
        $user->lastname = $lastname;
        $alert = "success";
        $imprimir = "Datos actualizados";  
      }
    

    $user->save();
    return response()->json(['message'=> $imprimir,'alert' => $alert]);

  }

  public function micuenta()
  {
    $user = Auth::user();
    return view('public.dashboard', compact('user'));
  }


  public function pedidos()
  {
    $user = Auth::user();
    return view('public.dashboard_order',  compact('user'));
  }


  public function direccion()
  {
    $user = Auth::user();
    $direcciones = UserDetails::where('email', $user->email)->get();
    
    return view('public.dashboard_direccion', compact('user', 'direcciones'));
  }

  public function error()
  {
    //
    return view('public.404');
  }

  public function producto(string $id)
  {

    $productos = Products::where('id', '=', $id)->get();
   
    $especificaciones = Specifications::where('product_id', '=', $id)
    ->where(function ($query) {
        $query->whereNotNull('tittle')
            ->orWhereNotNull('specifications');
    })
    ->get();
    $productosConGalerias = DB::select("
            SELECT products.*, galeries.*
            FROM products
            INNER JOIN galeries ON products.id = galeries.product_id
            WHERE products.id = :productId limit 5 
        ", ['productId' => $id]);


    $IdProductosComplementarios = $productos->toArray();
    $IdProductosComplementarios = $IdProductosComplementarios[0]['categoria_id'];

    $ProdComplementarios = Products::where('categoria_id', '=', $IdProductosComplementarios)->get();
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    $url_env = $_ENV['APP_URL'];



    return view('public.product', compact('productos', 'atributos', 'valorAtributo', 'ProdComplementarios', 'productosConGalerias', 'especificaciones', 'url_env'));
  } */

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
        $data['full_name'] = $request->name. ' ' . $request->last_name;
    
       try {
        $reglasValidacion = [
            'name' => 'required|string|max:255',
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
        $this-> envioCorreo($formlanding);

        return response()->json(['message'=> 'Mensaje enviado con exito']);
       } catch (ValidationException $e) {
       
        return response()->json(['message'=> $e->validator->errors()], 400);
       }
    }



  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img =  $manager->read($file);

    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }
    $img->save($route . $nombreImagen);
  }


  private function envioCorreo($data){
        
    $name = $data['full_name'];
    $mail = EmailConfig::config();
    try {
        $mail->addAddress($data['email']);
        $mail->Body = "Hola $name su mensaje fue enviado con exito. En breve un asesor se comunicara con usted.";
        $mail->isHTML(true);
        $mail->send();
        
    } catch (\Throwable $th) {
        //throw $th;
    }  
  }

  private function envioCorreoCompra($data){
        
    $name = $data['nombre'];
    $mail = EmailConfig::config();
    try {
        $mail->addAddress($data['email']);
        $mail->Body = "Hola $name su pedido fue realizado.";
        $mail->isHTML(true);
        $mail->send();
        
    } catch (\Throwable $th) {
        //throw $th;
    }  
  }


}