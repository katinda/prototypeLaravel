<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo</title>
    </head>
    <body>
     <h1>DemdemEvents</h1>

       <ul>
        <?php foreach($events as $event):?>
                <li><?= $event ?></li>
        <?php endforeach; ?>              
       </ul>



            <h2>deuxieme tableau </h2>
       <ul>
        <?php foreach($events as $event):?>
                <li>{{ $event }}</li>
        <?php endforeach; ?>              
       </ul>


            <h2>Troisième tableau </h2>
            <ul>
            @forelse($events as $event)
                <li>{{ $event }}</li>
            @empty  {{-- s'il n'y a rien dans le tableau il mettra qu'il n'y a pas d'evenement --}}
                Pas d'évènements
            @endforelse             
            </ul>    
            

    </body>
</html>