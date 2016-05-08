@extends('admin.master')

@section('content')
<style media="screen">
  .fotodosen{
    padding: 1px;
    height: 100px;
    width: 100px;
  }
  .hidden{
    display: none;
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
                      <div class="col-md-10">
                          <div class="panel panel-default">
                            <div class="panel-heading">Edit Publikasi</div>
                              <div class="panel-body">
                                <div class="col-sm-8">

                                <?php
                                  $author = $data->authors;
                                ?>
                                {!! Form::open(['route' => ['update_publikasi',$data->id] , 'files' => 'true']) !!}
                                <div class="form-group">
                                    {!! Form::label('judul', 'Judul :', ['class' => 'control-label']) !!}
                                    {!! Form::text('judul', $data->title, ['class' => 'form-control']) !!}
                                </div>
                                {!! Form::hidden('authors', null , ['value'=> $data->authors->count() ,'id'=>'authors']) !!}

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
                                        {!! Form::label('authorlabel', 'Penulis :', ['class' => 'control-label']) !!}
                                        <?php $ctr =1?>
                                        @foreach($author as $vals)
                                          {!! Form::text('author'.$ctr, $vals->name, ['class' => 'form-control']) !!}
                                          <?php $ctr++; ?>
                                          <br/>
                                        @endforeach
                                </div>

                                <a class="btn btn-primary" onclick="addAuth()" role="button" >Tambahkan  </a>
                                <a class="btn btn-primary" onclick="deleteAuth()" role="button" >Hapus   </a>
                                <br/>
                                <br/>

                                <div class="form-group">
                                  {!! Form::label('date', 'Tanggal publikasi:', ['class' => 'control-label']) !!}
                                  {!! Form::date('date', $data->date->format('d/m/Y')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('abstract', 'Abstract: ', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('abstract', $data->abstract , ['class' => 'form-control']) !!}
                                </div>
                                <script type="text/javascript">
                                function togglepdf() {
                                  $("#uploadpdf").toggle();
                                  if( $("#changePdf").val() === 'false'){
                                    $("#changePdf").val('true');
                                  }else{
                                    $("#changePdf").val('false');
                                  }
                                };

                                function toggler() {
                                  $("#uploadImage").toggle();
                                  if( $("#changeImage").val() === 'false'){
                                    $("#changeImage").val('true');
                                  }else{
                                    $("#changeImage").val('false');
                                  }
                                }
                                </script>
                                <div class="form-group">
                                    {!! Form::hidden('changePdf', 'false', ['id'=>'changePdf'])!!}
                                    {!! Form::label('pdf', 'File : (PDF max 10 MB) ', ['class' => 'control-label']) !!}
                                    <h6> {{ $data->Filename }} <a href="{!! route('download_publikasi',$data->slug) !!}"> lihat</a> </h6>
                                    <a class="btn btn-primary" onclick="togglepdf()" role="button" >Change File: </a>
                                    <br/>
                                    <div class="" id='uploadpdf'>
                                      {!! Form::file('pdf') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                  {!! Form::label('image', 'Image: ', ['class' => 'control-label']) !!}
                                  {!! Form::hidden('changeImage', 'false', ['id'=>'changeImage'])!!}
                                  <br/>
                                  <a class="btn btn-primary" onclick="toggler()" role="button" >Change Image: </a>
                                  <br/>
                                  <div id="uploadImage">
                                    {!! Form::file('image') !!}
                                  </div>
                                </div>


                                <script type="text/javascript">
                                  $("#uploadpdf").toggle();
                                  $("#uploadImage").toggle();
                                </script>
                                <br/>
                                <br/>
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
