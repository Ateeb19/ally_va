@extends('layouts.app')

@section('content')
@push('styles')
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush
<section class="admin-table-wrapper mt-5">
	<div class="container">
		<div class="table-info-wrap">
		    <div class="row">
		        <form method="POST" action="{{ route('blogs.store') }}" class="vstack gap-3" id="AddBlogForm" enctype="multipart/form-data">
		            @csrf
		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-user-fill"></i></span>
		                <input type="text" class="form-control" placeholder="Blog Title" name="title" required />
		            </div>

		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-mail-fill"></i></span>
		                <input type="text" class="form-control" placeholder="Blog Sub-Title" name="sub_title" required />
		            </div>

		            <div class="input-group">
		                <span class="input-group-text"><i class="ri-phone-fill"></i></span>
		                <input type="file" class="form-control" placeholder="Blog Image" name="blog_image" required accept="image/*" />
		            </div>

		            <!-- Quill Editor -->
		            <div class="mb-3">
		                <div id="editor" style="height: 500px; width:100%;"></div>
		            </div>

		            <!-- Hidden field to store HTML description -->
		            <input type="hidden" name="description" id="description">

		            <div class="input-group">
		            	<span class="input-group-text"><i class="ri-phone-fill"></i></span>
		                <select class="form-select" name="status">
		                	<option value="active">Active</option>
		                	<option value="inactive">Inactive</option>
		                </select>
		            </div>
		            <button type="submit" class="btn btn-primary w-100 mb-3">
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

	<!-- Initialize Quill -->
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

		    // On form submit, put HTML in hidden input
		    var form = document.getElementById("AddBlogForm");
		    form.onsubmit = function() {
		        var description = document.querySelector("input[name=description]");
		        description.value = quill.root.innerHTML;
		    };
		});
	</script>
@endpush
@endsection