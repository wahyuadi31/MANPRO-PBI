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

  @include('partials.alert.errors')
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
                          <th>Authors</th>
                          <th>File</th>
                          <th>Foto</th>
                          <th>Preview</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>
                            {{$Publication->title}}
                          </td>
                          <td>
                            {{$Publication->abstract}}
                          </td>
                          <td>
                            @foreach($Publication->authors as $auths)
                              {{ $auths->name }}
                              <br/>
                            @endforeach
                          </td>

                          <td>
                            <a href="{!! route('download_publikasi',$Publication->slug) !!}"> download</a>
                          </td>

                          <td>
                            <img src="
                            @if( strcmp($Publication->imgMime , 'no image') )
                                {{ asset('/img/placeholder.png') }}
                            @else
                                {{ asset('/uploads/img/dosen/'.$Publication->slug.'.'.$Publication->imgMime)}}
                            @endif" alt="" class="fotodosen"/>
                          </td>

                          <td>
                            <a href="{!! route('show_publikasi',$Publication->slug) !!}"> link</a>
                          </td>

                          <td>
                            <a href="{!! route('edit_publikasi', $Publication->id) !!}" class="btn btn-success" role="button">Edit</a>
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

                                <?php $author =1 ?>
                                {!! Form::open(['route' => 'tambah_publikasi', 'files' => 'true']) !!}
                                <div class="form-group">
                                    {!! Form::label('judul', 'Judul :', ['class' => 'control-label']) !!}
                                    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
                                </div>
                                {!! Form::hidden('authors', null, ['value'=> '1' ,'id'=>'authors']) !!}

                                <script type="text/javascript">
                                var authCtr = 1;
                                $("#authors").val( authCtr );
                                function addAuth() {
                                      authCtr++;
                                      $("#authors").val( authCtr );
                                      // var div = document.createElement( "div" );
                                      // div.setAttribute('id', 'auth'+auth);
                                       //var label = '<label for="author'.concat (auth ,'" class="control-label">Penulis :</label>');
                                      var input =  '<br id= "break'.concat(
                                                                  authCtr,
                                                                  '"/><input class="form-control" name="author'
                                                                  .concat (
                                                                    authCtr ,'" id="author',
                                                                    authCtr ,'" type="text">'
                                                                  ));
                                      //div.appendChild(input);
                                      $( "#divAuthor" ).append(input);
                                }

                                function deleteAuth(){
                                  if(authCtr > 1){
                                    $("#break"+(authCtr)).remove();
                                    $("#author"+(authCtr)).remove();
                                    authCtr--;
                                    $("#authors").val( authCtr );
                                  }
                                }

                                </script>

                                <div class="form-group" id='divAuthor'>
                                        {!! Form::label('author'.$author, 'Penulis :', ['class' => 'control-label']) !!}
                                        {!! Form::text('author'.$author, null, ['class' => 'form-control']) !!}
                                </div>

                                <a class="btn btn-primary" onclick="addAuth()" role="button" >Tambahkan  </a>
                                <a class="btn btn-primary" onclick="deleteAuth()" role="button" >Hapus   </a>
                                <br/>
                                <br/>

                                <div class="form-group">
                                  {!! Form::label('date', 'Tanggal publikasi:', ['class' => 'control-label']) !!}
                                  {!! Form::date('date', \Carbon\Carbon::now()->format('d/m/Y') ) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('abstract', 'Abstract: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('abstract', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('pdf', 'File : (PDF max 10 MB) ', ['class' => 'control-label']) !!}
                                    {!! Form::file('pdf') !!}
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
