@component('mail::message')
    # PhoneMarket
    
    __Nombre:__ {{$datosMensaje['nombre']}}

    __Apellidos:__ {{$datosMensaje['apellidos']}}

    __Email:__ {{$datosMensaje['email']}}


    __Mensaje:__

    {{$datosMensaje['mensaje']}}
@endcomponent