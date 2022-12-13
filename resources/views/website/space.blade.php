<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Import data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('website.spaceProcess') }}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="row">
                               

                                <div class="col-md-4 form-group mb-3">
                                    <label>Select CSV File</label>
                                    <div class="custom-file mb-3">
                                          <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" required>
                                  </div>
                                </div>
                                
                                <div class="col-md-12 form-group mb-3">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
                                </div>

                              

                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>