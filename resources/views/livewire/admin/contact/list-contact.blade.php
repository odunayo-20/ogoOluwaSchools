<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    @include('livewire.admin.deleteForm.delete-form')
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <h2 style="text-decoration: underline;">FEEDBACKS</h2>


            <div class="row">

                <div class="col-md-12">
                    <!-- query for pin counting start -->

                    <!-- query for pin counting stop -->

                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong></strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card mb-0">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All <span class="badge badge-white">{{ count($contacts) }}</span></a>
                                </li>

                            </ul>
                        </div>
                        {{-- <div class="card-header-form"> --}}
                            <div class="row g-3 align-items-center">
                             <div class="col-auto">
                                     <div class="input-group">
                                         <input wire:model.live='search' type="search" class="form-control" placeholder="Search">
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
                     {{-- </div> --}}

                    </div>
                </div>

            {{-- </div> --}}

            <div class="card-body">
                <div class="table-responsive">
                    <table id="mainTable" class="table table-striped">
                        <tr>

                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($contacts as $value)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->subject }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="contact/view/{{ $value->id }}"><i
                                        class="fa fa-eye"></i></a>
                               
                                        <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div style="float: right">

                        {{ $contacts->links() }}
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
