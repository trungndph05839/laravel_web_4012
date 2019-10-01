@extends('layouts') 
<!-- extend => ke thua -->
@section('title',' Post')


@section('contents')
<!-- code -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->

    @if(empty(@post1))
       <p>No data</p>
    <!--   -->
    @else
      <table class="table">
        <thead>
          <th>User</th>
          <th>Content</th>
        
        </thead>
        <tbody>
          @foreach($post1 as $post)
             <tr>
               <td>{{$post['user_id']}}</td>
               <td>{{$post['content']}}</td>
  
             </tr>
          @endforeach
        </tbody>
      </table>
    <!--   -->
    @endif

  </div>
  <!-- /.content-wrapper -->
@endsection
<!-- section chuyen code vao yield -->