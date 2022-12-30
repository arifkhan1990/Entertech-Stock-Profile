@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Cash Limit - Entertech</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6 bg-primary">
            <div class="flex flex-row items-start p-5">
                <h2 class="text-xl font-medium items-start font-semibold text-white">Update Cash Limit</h2>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-12 2xl:col-span-10">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Date picker from -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                   <div class="grid grid-cols-12 gap-6  mt-8 mb-8">
                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 ml-8 mt-2">
                                <div class="relative w-70 mx-auto">
                                    <input type="text" class="form-control" name="client_code" placeholder="Client Code">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 ml-8 mt-2">
                                <div class="relative w-70 mx-auto">
                                    <input type="text" class="form-control" name="amount" placeholder="Cash Amount">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block">
                            <div class="intro-y box col-span-12 2xl:col-span-6 mt-2 mr-2 ml-8">
                                    <a href="" class="btn btn-success w-24 text-white inline-block mr-1 mb-2">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
