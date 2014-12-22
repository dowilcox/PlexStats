@extends('layouts.master')

@section('content')
	<div class="title">Laravel 5</div>
	<div class="quote">{{ Inspiring::quote() }}</div>
	<a href="#">Testing</a>

	<div class="bs-docs-section">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h1 id="buttons">Buttons</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <p class="bs-component">
              <a href="#" class="btn btn-default">Default</a>
              <a href="#" class="btn btn-primary">Primary</a>
              <a href="#" class="btn btn-success">Success</a>
              <a href="#" class="btn btn-info">Info</a>
              <a href="#" class="btn btn-warning">Warning</a>
              <a href="#" class="btn btn-danger">Danger</a>
              <a href="#" class="btn btn-link">Link</a>
            </p>

            <p class="bs-component">
              <a href="#" class="btn btn-default disabled">Default</a>
              <a href="#" class="btn btn-primary disabled">Primary</a>
              <a href="#" class="btn btn-success disabled">Success</a>
              <a href="#" class="btn btn-info disabled">Info</a>
              <a href="#" class="btn btn-warning disabled">Warning</a>
              <a href="#" class="btn btn-danger disabled">Danger</a>
              <a href="#" class="btn btn-link disabled">Link</a>
            </p>


            <div style="margin-bottom: 15px;">
              <div class="btn-toolbar bs-component" style="margin: 0;">
                <div class="btn-group">
                  <a href="#" class="btn btn-default">Default</a>
                  <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-primary">Primary</a>
                  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-success">Success</a>
                  <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-info">Info</a>
                  <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-warning">Warning</a>
                  <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
            </div>

            <p class="bs-component">
              <a href="#" class="btn btn-primary btn-lg">Large button</a>
              <a href="#" class="btn btn-primary">Default button</a>
              <a href="#" class="btn btn-primary btn-sm">Small button</a>
              <a href="#" class="btn btn-primary btn-xs">Mini button</a>
            </p>

          </div>
          <div class="col-lg-6">

            <p class="bs-component">
              <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>
            </p>


            <div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-default">Left</a>
                <a href="#" class="btn btn-default">Middle</a>
                <a href="#" class="btn btn-default">Right</a>
              </div>
            </div>

            <div class="bs-component" style="margin-bottom: 15px;">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <a href="#" class="btn btn-default">1</a>
                  <a href="#" class="btn btn-default">2</a>
                  <a href="#" class="btn btn-default">3</a>
                  <a href="#" class="btn btn-default">4</a>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-default">5</a>
                  <a href="#" class="btn btn-default">6</a>
                  <a href="#" class="btn btn-default">7</a>
                </div>

                <div class="btn-group">
                  <a href="#" class="btn btn-default">8</a>
                  <div class="btn-group">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                     </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="bs-component">
              <div class="btn-group-vertical">
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
                  <a href="#" class="btn btn-default">Button</a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="nav">Navs</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <h2 id="nav-tabs">Tabs</h2>
            <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li class="disabled"><a>Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                    <li class="divider"></li>
                    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                  </ul>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 id="nav-pills">Pills</h2>
            <div class="bs-component">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <br>
            <div class="bs-component">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
            <div class="bs-component">
              <ul class="breadcrumb">
                <li class="active">Home</li>
              </ul>

              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Library</li>
              </ul>

              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
              </ul>
            </div>

          </div>
        </div>


        <div class="row">
          <div class="col-lg-4">
            <h2 id="pagination">Pagination</h2>
            <div class="bs-component">
              <ul class="pagination">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>

              <ul class="pagination pagination-lg">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>

              <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>
          <div class="col-lg-4">
            <h2 id="pager">Pager</h2>
            <div class="bs-component">
              <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
              </ul>

              <ul class="pager">
                <li class="previous disabled"><a href="#">← Older</a></li>
                <li class="next"><a href="#">Newer →</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">

          </div>
        </div>
      </div>
@stop