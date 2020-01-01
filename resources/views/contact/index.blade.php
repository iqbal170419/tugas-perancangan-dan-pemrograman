@extends ('layout.main')
@section ('container')

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contact</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
               @endif
        <div class="card-body">
                    <ul class="list-group">
                    @foreach($contact as $contact)
            <li class="list-group-item d-flex justify-content-between align-items-center">
               {{ $loop->iteration }}
               {{ $contact->nama }}
                <a href="/contact/{{ $contact->id }}" class="badge badge-primary badge-pill">Detail</a>
            </li>
            @endforeach
            </ul>
        </div>

        <!-- /.card-body -->
       //<div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
@endsection