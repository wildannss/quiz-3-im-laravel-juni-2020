<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @extends('layouts.master')

        @section('isi')

        <a class="btn btn-success btn-icon-split" href="/artikel"> List Artikel </a>
        
        <form method="POST" action="/artikel" >
            @csrf
            <table>
                <tr>
                    <td>
                        <label>
                            Judul Artikel
                        </label>
                    </td>
                    <td>
                        <input type="text" name="title" for="title" placeholder="Silahkan Judul Artikel..." />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Isi Artikel
                        </label>
                    </td>
                    <td>
                        <textarea name="body" for="body" placeholder="Silahkan Isi Artikel..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Tag
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tag" for="tag" placeholder="Silahkan Isi Tag..." />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn btn-primary btn-icon-split" type="submit">Tambah</button>
                    </td>
                </tr>
            </table>
        </form>

        @endsection
        
    </body>
</html>
