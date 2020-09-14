<div class="container mt-3">
<h2 class="text-center">
    Upload a video
</h2>
    <form action="index.php?uc=video&action=valideForm" method="POST" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
    <div class="form-group">
        <label for="videoName">Video Name</label>
        <input required type="text" placeholder="Insert the video name" name="videoName" id="videoName" class="form-control" value="">
        <label for="videoFile" class="mt-3">Video File</label>
        <input onchange="processSelectedFiles(this)" required type="file" class="form-control-file" name="videoFile" id="videoFile">
        <label for="imgFile" class="mt-3">Image file</label>
        <input required type="file" class="form-control-file" id="imgFile" name="imgFile">
    </div>
    <div class="row">
        <div class="col"><a href="index.php?uc=video&action=list" class="btn btn-secondary btn-block">Go back to home</a></div>
        <div class="col"><button type="submit" class="btn btn-success btn-block">Upload</button></div>
    </div>
    </form>
</div>

<script src="./vues/js/formVideo.js"></script>