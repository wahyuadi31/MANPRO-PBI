@extends('admin.master')

@section('content')
<div id="article-content">
  <nav class="navbar-inverse">
       <div class="container">
          <h1 class="glyphicon glyphicon-duplicate"> ARTICLE </h1>
      <br/><br/>
       </div>
  </nav>

  <div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1>About PBB</h1>
                  <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                  <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

    </div>
          </div>
      </div>
  </div>
</div>

<div id="publish-content">
  <nav class="navbar-inverse">
       <div class="container">
          <h1 class="glyphicon glyphicon-duplicate"> PUBLISH </h1>
      <br/><br/>
       </div>
  </nav>
  <div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">


                  <table>
                    <tr>
                      <td style="width:35%">
                        Judul
                      </td>
                      <td >
                        <input type="text" name="name" value="" placeholder="judul artikel" style="width:100%">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Input gambar
                      </td>
                      <td>
                        <input type="file" name="name" value="" style="width:100%">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Isi konten
                      </td>
                      <td>
                        <textarea name="name" rows="8" cols="40" placeholder="isi konten/artikel"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Author
                      </td>
                      <td>
                        <input type="text" name="name" value="" placeholder="nama anda" style="width:100%">
                      </td>
                    </tr>

                    <tr>
                      <td></td>
                      <td id="btn-publish">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="background-color: black; color: white;">
                          <strong>Publish</strong>
                        </a>
                      </td>
                    </tr>
                  </table>

                  <!-- <br><br>
                  <div style="padding-left:42%;">

                  </div> -->

              </div>
          </div>
      </div>
  </div>
</div>


<div id="user-content">
  <nav class="navbar-inverse">
       <div class="container">
          <h1 class="glyphicon glyphicon-duplicate"> USER </h1>
      <br/><br/>
       </div>
  </nav>

  <div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1>About PBB</h1>
                  <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                  <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

    </div>
          </div>
      </div>
  </div>
</div>

@endsection
