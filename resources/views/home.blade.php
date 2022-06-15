@extends('layouts.app')

@section('content')
    @include('includes.sidebar') 
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        @include('includes.navbar')
        <div class="container-fluid py-4" v-if="menu == 0">
            <!-- Esto se puede modificar -->
            <h3>Vista inicial cuando inicio sesión</h3>
        </div>
        <!-- Cuando el menu o vista que este sea diferente de 0 me mostrara la vista correspoindiente -->
        <div class="container-fluid py-4" v-else>
            <div class="row mt-4">
                @include('includes.contenido')
            </div>
        </div>
    </main>
@endsection
