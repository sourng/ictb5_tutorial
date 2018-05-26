<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
    <style>
      .dropdown {
          float: left;
          /*overflow: hidden;*/
      }

    .dropdown .dropbtn {
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 10px 10px;
        background-color: inherit;
        font-family: inherit;
        margin: 0px;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
        /*border-radius: 5px;*/
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 300;
    }

  .dropdown-content a {
      float: none;
      color: black;
      padding: 10px 10px;
      text-decoration: none;
      display: block;
      text-align: left;
       z-index: 600;
  }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        z-index: 600;
    }


     .table{visibility: hidden;opacity: 0;}
      .animated{visibility: visible;opacity: 1;}
      #maincontentDefault{display:none;}
      .bgstretcher{display:none;}
      body{background:#fff;}
      #maincontentDefault img{
        position: absolute; 
        z-index:800; 
        top: 50%; 
        left: 50%; 
        width:279px;
        margin-left: -165px;
        margin-top: -146px;
      }
        .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

}




</style>