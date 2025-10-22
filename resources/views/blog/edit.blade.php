@extends('layouts.app')

@section('content')
@push('styles')
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush
<section class="admin-table-wrapper mt-5">
	<div class="container">
		<div class="table-info-wrap">
		    <div class="row">
		        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" class="vstack gap-3" id="AddBlogForm" enctype="multipart/form-data">
		            @csrf
		            @method('PUT')
		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-user-fill"></i></span>
		                <input type="text" class="form-control" placeholder="Blog Title" name="title" required value="{{ $blog->title }}" />
		            </div>

		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-mail-fill"></i></span>
		                <input type="text" class="form-control" placeholder="Blog Sub-Title" name="sub_title" required value="{{ $blog->sub_title }}" />
		            </div>

		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-phone-fill"></i></span>
		                <input type="file" class="form-control" placeholder="Blog Image" name="blog_image" accept="image/*" />
		            </div>

		            <!-- Quill Editor -->
		            <div class="mb-3">
		                <div id="editor" style="height: 200px; width:100%;"></div>
		            </div>

		            <!-- Hidden field to store HTML description -->
		            <input type="hidden" name="description" id="description">

		            <div class="input-group">
		            	<span class="input-group-text"><i class="ri-phone-fill"></i></span>
		                <select class="form-select" name="status">
		                	<option value="active" {{ $blog->status == 'active' ? 'selected' : '' }}>Active</option>
		                	<option value="inactive"  {{ $blog->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
		                </select>
		            </div>
		            <button type="submit" class="btn btn-primary w-100">
		                Save
		            </button>
		        </form>
		    </div>
		</div>
	</div>
</section>
@push('script')
	<!-- Include Quill JS -->
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

	<script>
	document.addEventListener("DOMContentLoaded", function () {
	    // Initialize Quill
	    var quill = new Quill("#editor", {
	        theme: "snow",
	        placeholder: "Write your blog description here...",
	        modules: {
	            toolbar: [
	                [{ header: [1, 2, 3, false] }],
	                ["bold", "italic", "underline", "strike"],
	                ["blockquote", "code-block"],
	                [{ list: "ordered" }, { list: "bullet" }],
	                [{ align: [] }],
	                ["link", "image"],
	                ["clean"]
	            ]
	        }
	    });

	    // Set existing description if editing
	    @if(isset($blog) && $blog->description)
	        quill.root.innerHTML = @json($blog->description);
	    @endif

	    // On form submit, copy content to hidden input
	    var form = document.getElementById("AddBlogForm");
	    if(form) {
	        form.addEventListener("submit", function() {
	            var descriptionInput = document.querySelector("input[name=description]");
	            if(descriptionInput) {
	                descriptionInput.value = quill.root.innerHTML;
	            }
	        });
	    }
	});
	</script>
@endpush

@endsection