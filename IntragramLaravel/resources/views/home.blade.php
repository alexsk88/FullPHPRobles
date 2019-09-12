@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.alert')

            @foreach ($images as $image)
                
            <div class="card my-3">
               
                
                <div class="card-header">
                    @if ( $image->user->image)
                        <div class="avatar_mask float-left">
                            <img src="{{ route('user.avatar',['filename'=>  $image->user->image]) }}" 
                            class="img-fluid" alt="User Avatar">
                        </div>
                    @endif
                    <a href="{{ route('image.detail',['id'=>$image->id]) }}" class="nav-link text-dark">
                        <span class="float-left ml-3">
                            <b>{{ $image->user->name }}</b> |
                            <b class="text-secondary">{{  $image->user->nick }}</b>
                        </span>
                    </a>
                </div>

                <div class="card-body tarjetaimagen">
                    <div class="float-left mb-3">
                        <img src="{{ route('image.user',['filename'=>  $image->image_path]) }}" 
                        class="img-fluid imagenhome" alt="Image User">
                    </div>

                    <div class="mx-4 mt-5">
                        <b class="text-secondary">{{  $image->user->nick }}
                        | {{ \FormatTime::LongTimeFilter($image->created_at) }}</b>
                        <p>{{ $image->description }}</p>    
                    </div>

                    <div class="mx-4 mb-2">
                        <img src="{{ asset('img/heart-black.png') }}" 
                        width="25" class="img-fluid mr-2 pointer"
                        alt=""> 
                        <a href="" class="btn btn-small btn-warning">
                            Comentarios ({{ count($image->comments) }})
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
            
            {{-- PAGINACION --}}
            {{-- La paginacion de Laravel muy easy --}}

            <div class="clearfix"></div>
            <div class="container w3-center">
                {{ $images->links()}} 
            </div>
        </div>
    </div>
</div>
@endsection
