<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo $name;
    ?>
    <p>Hello {{ $name }}</p>

    <p>Hello, {{$script}}</p>
    <p>Hello, <?php echo $script; ?></p>


    <p>Hello, {{$html}}</p>
    <p>Hello, <?php echo $html; ?></p>

    <p>Hello, {{$array[0]}}</p>

    @if(isset($name))
        <h1>Welcome, {{ $name }}</h1>
    @else
        <h1>Welcome, Guest</h1>
    @endif

    @if(isset($name) && strstr($name,'4'))
        <h1>Welcome, {{ $name }}</h1>
        @elseif(strlen($name)>10)
        <h1>Welcome, 
            too long user
        </h1>

        @else
        <h1>Welcome, Guest</h1>
    @endif

    {{--Switch--}}

        @switch($name)
            @case('Dita')
                <h1>Welcome, Dita</h1>
                @break
            @case('John')
                <h1>Welcome, John</h1>
                @break
            @default
                <h1>Welcome, Guest</h1>
        @endswitch

        {{--Loops,For,Foreach,While--}}

        @for($i=0; $i<5; $i++)
            <p>Number: {{ $i }}</p>
        @endfor

        @foreach($array as $item)
            <p>Item: {{ $item }}</p>    
        @endforeach

        @php
        $count = 0;
        @endphp
        @while($count < 5)
            <p>Count: {{ $count }}</p>
            @php
            $count++;
            @endphp
        @endwhile


        {{--elseif ne loops--}}

        @foreach($array as $item)
          @if($item == 'Item 3')
            <p>Found: {{ $item }}</p>
          @else
            <p>Not Found: {{ $item }}</p>   
            @endif
        @endforeach

        @foreach($subject as $x)
        {{ $x }}    
        @endforeach
        <br>
        @forelse($subject as $sub)
        {{ $sub }}
        @empty 
            <p>No subjects available.</p>
        @endforelse
        
        @auth
         <p>Welcome, authenticated user!</p>
         @endauth
         
            @guest
            <p>Welcome, guest!</p>
            @endguest

        {{--krijimi i nje direktive--}}
        {{-- @sayHello
        {{$username}}
        <br>
         @sayHello
        {{$username}}
        <br> --}}
        

</body>
</html>