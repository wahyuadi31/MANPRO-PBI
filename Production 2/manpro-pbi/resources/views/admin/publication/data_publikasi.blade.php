@extends('admin.master')

@section('content')
<style media="screen">
  .fotodosen{
    padding: 1px;
    height: 100px;
    width: 100px;
  }
</style>
<div id="article-content">
  <nav class="navbar-inverse">
       <div class="container">
          <h1 class="glyphicon glyphicon-duplicate"> Data Publikasi </h1>
      <br/><br/>
       </div>
  </nav>
  @if(Session::has('success'))
    <div class="alert-box success">
        <h2>{!! Session::get('success') !!}</h2>
    </div>
  @endif

  @if(Session::has('error'))
  	<p class="errors">{!! Session::get('error') !!}</p>
  @endif
  <div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
              </div>
          </div>
      </div>
  </div>
</div>
  <div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-10" >
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Publikasi</div>
                    <div class="panel-body">
                      <table class="table">
                        @foreach($data as $Publication)

                        <tr>

                          <th>Judul</th>
                          <th>Abstract</th>
                          <th>ShortDesc</th>
                          <th>File</th>
                          <th>Foto</th>
                          <th>Creator</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>
                            {{$Publication->title}}
                          </td>
                          <td>
                            {{$datadosen->abstract}}
                          </td>
                          <td>
                            {{$datadosen->body}}
                          </td>
                          <td>
                            {{$data->originalFileName}}
                          </td>

                          <td>
                            <img src="
                            @if(!strcmp($datadosen->image , 'no image'))
                                {{ asset('/img/placeholder.png') }}
                            @else
                                {{ asset('/uploads/img/dosen/'.$datadosen->image)}}
                            @endif" alt="" class="fotodosen"/>
                          </td>
                          <td>
                            <a href="" class="btn btn-success" role="button">Edit</a>
                            <a href="" class="btn btn-danger" role="button">Hapus</a>
                          </td>


                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                      <div class="col-md-10">
                          <div class="panel panel-default">
                            <div class="panel-heading">Tambah Dosen</div>
                              <div class="panel-body">
                                <div class="col-sm-8">

                                <?php  $author = 1 ; ?>
                                {!! Form::open(['route' => 'tambah_dosen', 'files' => 'true']) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Judul :', ['class' => 'control-label']) !!}
                                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                </div>
                                <script type="text/javascript">
                                function addAuth() {

                                }
                                </script>
                                    {!! Form::hidden('authors', 1, ['id'=>'authors']) !!}

                                <div class="form-group">
                                    {!! Form::label('author'.$author, 'Penulis :', ['class' => 'control-label']) !!}
                                    {!! Form::text('author'.$author, null, ['class' => 'form-control']) !!}
                                </div>

                                <a class="btn btn-primary" onclick="addAuth()" role="button" >Tambahkan Penulis : </a>

                                <div class="form-group">
                                    {!! Form::label('abstract', 'Abstract: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('abstract', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('filepdf', 'File : (PDF max 10 MB) ', ['class' => 'control-label']) !!}
                                    {!! Form::file('filepdf') !!}
                                </div>

                                <div class="form-group">
                                  {!! Form::label('image', 'Image: ', ['class' => 'control-label']) !!}
                                  {!! Form::file('image') !!}
                                </div>

                                {!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}

                                {!! Form::close() !!}
                               </div>
                              </div>
                         </div>
                       </div>

                 </div>
          </div>
      </div>
  </div>
</div>

@endsection
