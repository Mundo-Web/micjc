<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Models\NewsletterSubscriber;
use App\Http\Requests\StoreNewsletterSubscriberRequest;
use App\Http\Requests\UpdateNewsletterSubscriberRequest;
use App\Models\General;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
    public function store(StoreNewsletterSubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterSubscriberRequest $request, NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    public function showSubscripciones()
    {
        $subscripciones = NewsletterSubscriber::orderBy('created_at', 'desc')->get();

        return view('pages.subscripciones.index', compact('subscripciones'));
    }

    public function guardarUserNewsLetter(Request $request)
    {
        NewsletterSubscriber::create($request->all());
        $data = $request->all();
        $data['nombre'] = '';
        $this->envioCorreo($data);
        $this->envioCorreoInterno($data);
        return response()->json(['message' => 'Newsletter guardado ']);
    }

    private function envioCorreo($data)
    {
        $name = '';
        $mensaje = 'Gracias por comunicarte con MIC&JC';
        $mail = EmailConfig::config($name, $mensaje);
        $general = General::all()->first();
        // dd($mail);
        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '<html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>Dimensión Lider</title>
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
                          padding:0 80px;
                        "
                      >
                        <img
                          src="https://micjc.mundoweb.pe/mailing/Logo.png"
                          alt="MIC&JC"
                        />
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          <span style="display: block">Hola </span>
                        </p>
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-size: 40px;
                            line-height: 70px;
                            font-family: Montserrat, sans-serif;
                            font-weight: bold;
                          "
                        >
                          ¡Gracias
                          <span style="color: #ffffff">por escribirnos!</span>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
                          "
                        >
                          En breve estaremos comunicandonos contigo.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a
                          target="_blank"
                          href="https://micjc.mundoweb.pe/"
                          style="
                            text-decoration: none;
                            background-color: #fdfefd;
                            color: #254f9a;
                            padding: 16px 20px;
                            display: inline-flex;
                            justify-content: center;
                            border-radius: 10px;
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
        /* $name = $data['full_name']; */
        $name = 'Tienes un nuevo mensaje,';
        $mensaje = 'MIC&JS';
        $mail = EmailConfig::config($name, $mensaje);
        $emailCliente = General::all()->first();
        $general = General::all()->first();

        try {
            $mail->addAddress($emailCliente->email);
            $mail->Body =
                '<html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <title>Mundo web</title>
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
                          padding:0 80px;
                        "
                      >
                        <img
                          src="https://micjc.mundoweb.pe/mailing/Logo.png"
                          alt="dimension lider"
                        />
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p
                          style="
                            color: #ffffff;
                            font-weight: 500;
                            font-size: 18px;
                            text-align: center;
                            width: 500px;
                            margin: 0 auto;
                            padding: 20px 0;
                            font-family: Montserrat, sans-serif;
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
                          target="_blank"
                          href="https://micjc.mundoweb.pe/"
                          style="
                            text-decoration: none;
                            background-color: #fdfefd;
                            color: #254f9a;
                            padding: 16px 20px;
                            display: inline-flex;
                            justify-content: center;
                            border-radius: 10px;
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
          </html>';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}