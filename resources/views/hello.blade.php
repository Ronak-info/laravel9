<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class=" container">
        <div class="row text-center bg-success text-white p-4 " >
            <h1 class=" ">Hello View</h1>
        </div>
        <div class="row bg-dark text-white  ">
            <h2 >
                My name is {{ $sname }}.
            </h2>
            <h2>
                {{ $sname or 'no name' }}
            </h2>

            @if ($sname)
            <h2 >
                My New name is {{ $sname }}.
            </h2>
            @endif

            <h2 class="">
            @if ($age >= 18)
                {{ 'elligible for Vote'  }}
            @else
                {{ 'Not elligible for Vote' }}
            @endif
            </h2>

            <h2>
                @switch($choice)
                    @case('red')
                         Your Choice is {{ $choice }}
                        @break

                    @case('blue')
                        Your Choice is {{ $choice }}
                       @break

                    @default
                    {{ 'Default switch Case exexuted' }}

                @endswitch
            </h2>
            <h2>
                Array List
                <ul>
                    @foreach ($color as $v )
                       <li> {{ $v }}</li>
                    @endforeach
                </ul>

                @for ($i=1;$i<=10;$i++)
                    {{ $i }}
                @endfor

                @
            </h2>

        </div>

    </div>
</body>
</html>
