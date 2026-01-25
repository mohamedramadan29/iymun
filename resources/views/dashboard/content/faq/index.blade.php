@extends('dashboard.layouts.app')
@section('title', ' Faq ')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block"> Faq </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home</a></li>
                                <li class="breadcrumb-item active"> Faq  </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="float-md-right">
                        <a href="{{ route('dashboard.content.faq.create') }}" class="btn btn-primary btn-sm"> Add Faq  </a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Faq List  </h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Faq </th>
                                                    <th>Category</th>
                                                    <th>Order</th>
                                                    <th> Actions  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($faqs as $faq)
                                                    <tr>
                                                        <td>{{ $faq->question }}</td>
                                                        <td>{{ ucfirst($faq->category) }}</td>
                                                        <td>{{ $faq->order }}</td>
                                                        <td>
                                                            <a href="{{ route('dashboard.content.faq.edit', $faq->id) }}" class="btn btn-info btn-sm">Edit </a>
                                                            <form action="{{ route('dashboard.content.faq.destroy', $faq->id) }}" method="POST" style="display:inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
