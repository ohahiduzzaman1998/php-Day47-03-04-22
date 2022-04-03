@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">Blog Detail Info</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                       <tr>
                           <th>Blog Id</th>
                           <th>{{$blog->id}}</th>
                       </tr>
                        <tr>
                            <th>Blog Main Title</th>
                            <th>{{$blog->main_title}}</th>
                        </tr>
                        <tr>
                            <th>Blog Sub Title</th>
                            <th>{{$blog->sub_title}}</th>
                        </tr>
                        <tr>
                            <th>Blog Author</th>
                            <th>{{$blog->author_id}}</th>
                        </tr>
                        <tr>
                            <th>Blog Short Description</th>
                            <th>{!! $blog->short_description !!}</th>
                        </tr>
                        <tr>
                            <th>Blog Long Description</th>
                            <th>{!! $blog->long_description !!}</th>
                        </tr>
                        <tr>
                            <th>Blog Image</th>
                            <td><img src="{{asset($blog->image)}}" alt="" height="150" width="200"/></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
