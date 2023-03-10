<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>

  @include('layout.head')

</head>

<body>
  <div class="container-scroller">
    <!-- Navigation Bar -->
    @include('layout.navbar')
    
    <!-- Content Main -->
    <div class="container-fluid page-body-wrapper">
      @include('layout.color')

      <!-- Side Bar -->
      @include('layout.sidebar')

      <!-- Content -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">

                  Type Code Here ....................

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- End Content Main -->
  </div>
  
  <!-- Script -->
  @include('layout.script')

</body>

</html>
