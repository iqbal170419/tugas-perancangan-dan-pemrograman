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
          <h3 class="card-title">Detail info</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card">
            <div class="card-body">
               <h2 class="card-text">Date :   {{ $contact->created_at}} </h2>
                <h3 class="card-title">Name :     {{ $contact->nama}}</h3>
                <br>
                
                <br>
                <p class="card-text">Email :   {{ $contact->email}} </p>
                <p class="card-text">pesan :   {{ $contact->pesan}} </p>
               

                <button type="submit" class="btn btn-primary">Balas </button>
                
                <form  action="{{ $contact->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                   <button type="submit" class="btn btn-danger">Delete</button>
                 </from>
                
                
                  <a href="/contact" class="card-link">Back</a>
                
            </div>
            
            </div>

        <!-- /.card-body -->
        <div class="card-footer">
          Create by Admin
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>

@endsection

