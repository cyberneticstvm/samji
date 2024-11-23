@extends('base')
@section('content')
<section class="section banner-2 cover-image main-banner" data-bs-image-src="{{ asset('/assets/images/banners/24.jpg') }}" style="background: url(&quot;{{ asset('/assets/images/banners/24.jpg') }}&quot;) center center;">
    <div class="container">
        <div class="text-center text-fixed-white">
            <h1 class="text-fixed-white">My Listings</h1>
        </div>
    </div> <!-- Shape Start --> <svg style="display:none;">
        <symbol id="svg-shape" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--custom-white)" d="M0,96L1440,320L1440,320L0,320Z"></path>
        </symbol>
    </svg> <svg class="position-absolute w-100 svg-shape">
        <use xlink:href="#svg-shape"></use>
    </svg> <!--Shape End-->
</section>
<section class="section position-relative bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0"> All Listings </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Title / Name</th>
                                        <th>Ad Category</th>
                                        <th>Status</th>
                                        <th>Created by</th>
                                        <th>Created on</th>
                                        <th>Deleted</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($listings as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->mainCategory->name }}</td>
                                        <td><a href="{{ route('ad.status', encrypt($item->id)) }}" class="text-info">{{ $item->status }}</a></td>
                                        <td>{{ $item->user->role }}</td>
                                        <td>{{ $item->created_at->format('d.M.Y') }}</td>
                                        <td>{!! $item->cancelled() !!}</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center"> <a aria-label="anchor" href="{{ route('category.matrimonial.detail', ['category' => strtolower($item->mainCategory->name),'id' => $item->id, 'slug' => $item->slug]) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon btn-sm btn-primary rounded-circle" target="_blank"><i class="ti ti-eye"></i></a> <a aria-label="anchor" href="{{ route('ad.edit', encrypt($item->id)) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon btn-sm btn-secondary rounded-circle"><i class="ti ti-pencil"></i></a>
                                                <a aria-label="anchor" href="{{ route('ad.delete', encrypt($item->id)) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon btn-sm  btn-danger rounded-circle dlt"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')