<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Daftar Film</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
      body {
        font-family: "Poppins", sans-serif;
        background-image: url("img/bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
      }
      .card {
        box-shadow: 3px 3px 3px 3px lightgray;
        border-radius: 5px;
        width: 16rem;
        background-color: black;
        color: white;
        margin-top: 20px;
        margin-bottom: 20px;
      }
      .card img {
        width: 254.5px;
        height: 250px;
      }
    </style>
  </head>

  <body>
    <center>
      <br /><br />
      <h2><strong>Hesty's Favorite Film</strong></h2>
      <br /><br />
    </center>
    <div class="container">
      <!-- Button trigger modal -->
      <button
        type="button"
        class="btn btn-light rounded-circle p-3"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          enable-background="new 0 0 36 30"
          height="30px"
          id="Layer_1"
          version="1.1"
          viewBox="0 0 36 30"
          width="36px"
          xml:space="preserve"
        >
          <polygon
            fill="#231F20"
            points="14,30 22,25 22,17 35.999,0 17.988,0 0,0 14,17 "
          />
        </svg>
      </button>

      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  enable-background="new 0 0 36 30"
                  height="30px"
                  id="Layer_1"
                  version="1.1"
                  viewBox="0 0 36 30"
                  width="36px"
                  xml:space="preserve"
                >
                  <polygon
                    fill="#231F20"
                    points="14,30 22,25 22,17 35.999,0 17.988,0 0,0 14,17 "
                  />
                </svg>
                Filters
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <input
                type="text"
                name="keyword"
                id="keyword"
                class="form-control"
                placeholder="Search by Movie Title"
              />
              <br />
              <select name="rating" id="rating" class="form-control">
                <option value="ALL">all</option>
                <option value="PG">PG</option>
                <option value="R">R</option>
              </select>
            </div>
            <div class="modal-footer" style="width: 100%">
              <button
                type="button"
                name="search"
                id="search"
                class="w-full btn btn-primary"
                style="width: 100%"
              >
                <i class="fa fa-search px-2"></i>Search
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="data container"></div>
      
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".data").load("data.php");

        $("#search").on("click", function() {
          document.getElementById("nf").innerHTML = "";
          var keyw = $("#keyword").val().toLowerCase();
          var rat = $("#rating").val().toLowerCase();
          var result = 10;
          if(keyw.length > 0 && rat != "all"){
            document.getElementById("nf").innerHTML = "Result for '"+$("#keyword").val()+"'";
            $(".card").filter(function() {
              if(($(this).text().toLowerCase().indexOf(keyw) > -1) && ($("#ratings").text().toLowerCase().indexOf(rat) > -1)){
                $(this).show();
              }
              else{
                result--;
                $(this).hide();
              }
            });
          }
          else if(keyw.length > 0 && rat == "all"){
            document.getElementById("nf").innerHTML = "Result for '"+$("#keyword").val()+"'";
            $(".card").filter(function() {
                result--;
                if($(this).text().toLowerCase().indexOf(keyw) > -1){
                  $(this).show();
                }
                else{
                  result--;
                  $(this).hide();
                }
            });
          }
          else if(keyw.length == 0 && rat != "all"){
            document.getElementById("nf").innerHTML = "Filter by rating '"+$("#rating").val()+"'";
            $(".card").filter(function() {
                if($("#ratings").text().toLowerCase().indexOf(rat) > -1){
                  $(this).show();
                }
                else{
                  result--;
                  $(this).hide();
                }
            });
          }
          if(result == 0){
            document.getElementById("nf").innerHTML = "Data Not Found!";
          }
        });
      });
    </script>
  </body>
</html>
