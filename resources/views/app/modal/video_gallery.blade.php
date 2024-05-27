<div class="modal fade" id="kt_modal_create_video_gallery" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal_title">Add Video</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                </div>
            </div>
            <div class="modal-body py-lg-10 px-lg-10">
                <form method="POST" class="form" action="{{ url('video/gallery/store') }}" id="videoGalleryForm" enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="video_gallery_id" id="video_gallery_id" value="" />
                    <input type="hidden" name="video_gallery_type" id="video_gallery_type" value="" />
                    <div class="pt-0">
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Title</label>
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" placeholder="Title" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            <div class="text-muted fs-7">A title is required and recommended to be unique.</div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                        <div class="pt-0">
                            <div class="mb-10 fv-row">
                                <label class="form-label">Short Description</label>
                                <textarea id="short_description" class="form-control form-control-lg form-control-solid block mt-1 w-full" type="text" name="short_description" :value="old('short_description')" placeholder="Short Description"></textarea>
                                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                            </div>
                        </div>
                        <div class="pt-0">
                            <div class="mb-10 fv-row">
                                <label class="form-label">Full Description</label>
                                <textarea id="full_description" class="form-control form-control-lg form-control-solid block mt-1 w-full" type="text" name="full_description" :value="old('full_description')" placeholder="Full Description" ></textarea>
                                <x-input-error :messages="$errors->get('full_description')" class="mt-2" />
                            </div>
                        </div>
                        <div class="pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">File Type</label>
                                <div class="d-flex">
                                    <label class="form-check form-check-custom form-check-solid align-items-start me-4">
                                        <input class="form-check-input me-3 selected-radio" type="radio" id="link" name="selected_type" value="link">
                                        <span class="form-check-label d-flex flex-column align-items-start">
                                            <span class="fw-bold fs-5 mb-0">Link</span>
                                        </span>
                                    </label>
                                    <label class="form-check form-check-custom form-check-solid align-items-start">
                                        <input class="form-check-input me-3 selected-radio" type="radio" id="file" name="selected_type" value="file">
                                        <span class="form-check-label d-flex flex-column align-items-start">
                                            <span class="fw-bold fs-5 mb-0">File</span>
                                        </span>
                                    </label>
                                </div>
                                <x-input-error :messages="$errors->get('selected_type')" class="mt-2" />
                                <label id="selected_type-error" class="error" for="selected_type"></label>
                            </div>
                        </div>
                        <div class="pt-0 link">
                            <div class="mb-10 fv-row">
                                <label class="form-label">Link (URL)</label>
                                <x-text-input id="selected_link" class="block mt-1 w-full" type="text" name="selected_link" :value="old('selected_link')" placeholder="Link" />
                                <x-input-error :messages="$errors->get('selected_link')" class="mt-2" />
                            </div>
                        </div>
                        <div class="pt-0 file">
                            <div class="mb-10 fv-row">
                                <label class="form-label">Select File</label>
                                <x-text-input id="selected_file" class="block mt-1 w-full" type="file" name="selected_file" :value="old('selected_file')" placeholder="Select File" accept=".png, .jpg, .jpeg" />
                                <x-input-error :messages="$errors->get('selected_file')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-6" bis_skin_checked="1"></div>
                    <div class="d-flex justify-content-end">
                        <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" id="videoGallerySubmit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>