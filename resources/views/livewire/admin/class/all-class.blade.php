<!-- Main Content start -->
<div class="main-content">
    @include('livewire.admin.deleteForm.delete-form')

    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-12 my-2">
                    <a href="{{ route('admin_class_create') }}" class="btn btn-primary"
                        style="float: right;">Add Class</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="col-12">


                    <div class="card">
                        <div class="card-header">

                            <h4>Class Record Table</h4>

                            <div class="card-header-form">
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <input wire:model.live='search' type="search" class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <select wire:model.live='pagination' class="form-select ">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-body p-0"> -->

                    <!-- query to check for staff count stop -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">All <span
                                                    class="badge badge-white"></span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Publish <span
                                                    class="badge badge-primary"></span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Draft <span
                                                    class="badge badge-primary"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="mainTable" class="table table-striped">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($classes as $class)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $class->name }}</td>
                                        <td><button
                                            class="btn btn-sm btn-dange {{ $class->status == '1' ? '0' : 'btn-success' }} {{ $class->status == '0' ? '1' : 'btn-danger' }}"
                                            wire:click="updateStatus({{ $class->id }}, '{{ $class->status == '0' ? '1' : '0' }}')">
                                            @if ($class->status == '0')
                                            {{ 'Active' }}
                                            @else
                                            {{ 'Inactive' }}
                                            @endif
                                        </button></td>
                                        <td>
                                            <a wire:navigate class='btn btn-sm btn-primary'
                                                href="class/edit/{{ $class->id }}"><i class='fa fa-pen'></i></a>
                                            {{-- <a class='btn btn-sm btn-danger'
                                                wire:click='deleteClass({{ $class->id }})'><i
                                                    class='fa fa-trash'></i></a> --}}
                                                    <a href="#" wire:click='delete({{ $class->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></a> 
                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                            <div style="float: right">
                                {{ $classes->links() }}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- add content stop here-->
</div>

</section>
<!-- section stop -->

</div>
<!-- Main content stop -->

@push('script')
<script>

    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
    </script>
@endpush
