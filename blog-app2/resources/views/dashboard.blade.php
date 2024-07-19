<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Education Blog Admin Panel</title>

        <style>
            /* Main CSS Here */

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
:root {
--background-color1: #fafaff;
--background-color2: #ffffff;
--background-color3: #ededed;
--background-color4: #cad7fda4;
--primary-color: #4b49ac;
--secondary-color: #0c007d;
--Border-color: #3f0097;
--one-use-color: #3f0097;
--two-use-color: #5500cb;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: 27px;
font-weight: 600;
color: rgb(47, 141, 70);
}

.icn {
height: 30px;
}
.menuicn {
cursor: pointer;
}

.searchbar,
.message,
.logosec {
display: flex;
align-items: center;
justify-content: center;
}

.searchbar2 {
display: none;
}

.logosec {
gap: 60px;
}

.searchbar input {
width: 250px;
height: 42px;
border-radius: 50px 0 0 50px;
background-color: var(--background-color3);
padding: 0 20px;
font-size: 15px;
outline: none;
border: none;
}
.searchbtn {
width: 50px;
height: 42px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 0px 50px 50px 0px;
background-color: var(--secondary-color);
cursor: pointer;
}

.message {
gap: 40px;
position: relative;
cursor: pointer;
}
.circle {
height: 7px;
width: 7px;
position: absolute;
background-color: #fa7bb4;
border-radius: 50%;
left: 19px;
top: 8px;
}
.dp {
height: 40px;
width: 40px;
background-color: #626262;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
}
.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}
.dpicn {
height: 42px;
}

.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
background-image:
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
width: 5px;
}
.main::-webkit-scrollbar-track {
background-color: #9e9e9eb2;
}

.box-container {
display: flex;
justify-content: space-evenly;
align-items: center;
flex-wrap: wrap;
gap: 50px;
}
.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}
.nav-option:hover {
border-left: 5px solid #a2a2a2;
background-color: #dadada;
cursor: pointer;
}
.nav-img {
height: 30px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option1 {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option1:hover {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
}
.box {
height: 130px;
width: 230px;
border-radius: 20px;
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
padding: 20px;
display: flex;
align-items: center;
justify-content: space-around;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}
.box:hover {
transform: scale(1.08);
}

.box:nth-child(1) {
background-color: var(--one-use-color);
}
.box:nth-child(2) {
background-color: var(--two-use-color);
}
.box:nth-child(3) {
background-color: var(--one-use-color);
}
.box:nth-child(4) {
background-color: var(--two-use-color);
}

.box img {
height: 50px;
}
.box .text {
color: white;
}
.topic {
font-size: 13px;
font-weight: 400;
letter-spacing: 1px;
}

.topic-heading {
font-size: 30px;
letter-spacing: 3px;
}

.report-container {
min-height: 300px;
max-width: 1200px;
margin: 70px auto 0px auto;
background-color: #ffffff;
border-radius: 30px;
box-shadow: 3px 3px 10px rgb(188, 188, 188);
padding: 0px 20px 20px 20px;
}
.report-header {
height: 80px;
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 20px 10px 20px;
border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Articles {
font-size: 30px;
font-weight: 600;
color: #5500cb;
}

.view {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #5500cb;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
overflow-x: auto;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: auto;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
padding: 10px;
  /* white-space: nowrap; */
}

.label-tag {
width: 100px;
text-align: center;
background-color: rgb(0, 177, 0);
color: white;
border-radius: 4px;
}

/* responsive design css  */
/* Responsive CSS Here */
@media screen and (max-width: 950px) {
.nav-img {
	height: 25px;
}
.nav-option {
	gap: 30px;
}
.nav-option h3 {
	font-size: 15px;
}
.report-topic-heading,
.item1,
.items {
	width: 1000px;
}
}

@media screen and (max-width: 850px) {
.nav-img {
	height: 30px;
}
.nav-option {
	gap: 30px;
}
.nav-option h3 {
	font-size: 20px;
}
.report-topic-heading,
.item1,
.items {
	width: 700px;
}
.navcontainer {
	width: 100vw;
	position: absolute;
	transition: all 0.6s ease-in-out;
	top: 0;
	left: -100vw;
}
.nav {
	width: 100%;
	position: absolute;
}
.navclose {
	left: 00px;
}
.searchbar {
	display: none;
}
.main {
	padding: 40px 30px 30px 30px;
}
.searchbar2 {
	width: 100%;
	display: flex;
	margin: 0 0 40px 0;
	justify-content: center;
}
.searchbar2 input {
	width: 250px;
	height: 42px;
	border-radius: 50px 0 0 50px;
	background-color: var(--background-color3);
	padding: 0 20px;
	font-size: 15px;
	border: 2px solid var(--secondary-color);
}
}

@media screen and (max-width: 490px) {
.message {
	display: none;
}
.logosec {
	width: 100%;
	justify-content: space-between;
}
.logo {
	font-size: 20px;
}
.menuicn {
	height: 25px;
}
.nav-img {
	height: 25px;
}
.nav-option {
	gap: 25px;
}
.nav-option h3 {
	font-size: 12px;
}
.nav-upper-options {
	gap: 15px;
}
.recent-Articles {
	font-size: 20px;
}
.report-topic-heading,
.item1,
.items {
	width: 550px;
}
}

@media screen and (max-width: 400px) {
.recent-Articles {
	font-size: 17px;
}
.view {
	width: 60px;
	font-size: 10px;
	height: 27px;
}
.report-header {
	height: 60px;
	padding: 10px 10px 5px 10px;
}
.searchbtn img {
	height: 20px;
}
}

@media screen and (max-width: 320px) {
.recent-Articles {
	font-size: 12px;
}
.view {
	width: 50px;
	font-size: 8px;
	height: 27px;
}
.report-header {
	height: 60px;
	padding: 10px 5px 5px 5px;
}
.t-op {
	font-size: 12px;
}
.t-op-nextlvl {
	font-size: 10px;
}
.report-topic-heading,
.item1,
.items {
	width: 300px;
}
.report-body {
	padding: 10px;
}
.label-tag {
	width: 70px;
}
.searchbtn {
	width: 40px;
}
.searchbar2 input {
	width: 180px;
}
}

        </style>

        <style>
            /* datatables Css  */
            
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	

	/* New style */

	.data-table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

.data-table th,
.data-table td {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}

.data-table th {
  font-weight: bold;
  background-color: #f2f2f2;
}

.data-table td:nth-child(1),
.data-table th:nth-child(1) {
  width: 40px;
  text-align: center;
}

.data-table td:nth-child(2),
.data-table th:nth-child(2) {
  width: 200px;
}

.data-table td:nth-child(3),
.data-table th:nth-child(3) {
  width: 300px;
}

.data-table td:nth-child(4),
.data-table th:nth-child(4) {
  width: 100px;
  text-align: center;
}

.data-table td:nth-child(5),
.data-table th:nth-child(5) {
  width: 100px;
}

.data-table td:nth-child(6),
.data-table th:nth-child(6) {
  width: 100px;
  text-align: center;
}

.data-table td:nth-child(7),
.data-table th:nth-child(7) {
  width: 300px;
}

.data-table td:nth-child(8),
.data-table th:nth-child(8),
.data-table td:nth-child(9),
.data-table th:nth-child(9) {
  width: 100px;
  text-align: center;
}

.data-table td:nth-child(10),
.data-table th:nth-child(10) {
  width: 100px;
  text-transform: uppercase;
  font-weight: bold;
  color: #fff;
  background-color: green;
  text-align: center;
}

</style>
        
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Educational blog</div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">

					<div class="nav-option option1">
					<a href="{{route('dashboard')}}">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> Dashboard</h3>
                            </a>
					</div>

					<div class="option2 nav-option">
					<a href="{{route('blog.create')}}">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img"
							alt="articles">
						<h3> Create Posts</h3>
                      </a>
					</div>

					<div class="nav-option option3">
					<a href="{{route('blog.categories')}}">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report">
						<h3> Create category</h3>
                        </a>
					</div>

					<div class="nav-option option4">
					<a href="{{route('blog.categorylist')}}">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
							class="nav-img"
							alt="institution">
						<h3> Categories List</h3>
                         </a>
					</div>

					<div class="nav-option option5">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img"
							alt="blog">
						<h3> Profile</h3>
					</div>

					<!-- <div class="nav-option option6">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
							class="nav-img"
							alt="settings">
						<h3> Settings</h3>
					</div> -->

					<div class="nav-option logout">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout">
						<h3>Logout</h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">60.5k</h2>
						<h2 class="topic">Article Views</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">150</h2>
						<h2 class="topic">Posts</h2>
					</div>

					<img src=
"./images/posticon.png"
						alt="Posts">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">320</h2>
						<h2 class="topic">Users</h2>
					</div>

					<img src=
"./images/user.png"
						alt="Users">
				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">70</h2>
						<h2 class="topic">Published</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
				</div>
			</div>

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Recent Articles</h1>
					<button class="view">View All</button>
				</div>

				<!-- <div class="report-body" >
					<div class="report-topic-heading">
						<h3 class="t-op">ID</h3>
						<h3 class="t-op">Title</h3>
						<h3 class="t-op">Slug</h3>
						<h3 class="t-op">View Count</h3>
						<h3 class="t-op">User ID</h3>
						<h3 class="t-op">Image Url</h3>
						<h3 class="t-op">Body Description</h3>
						<h3 class="t-op">Created At</h3>
						<h3 class="t-op">Updated At</h3>
						<h3 class="t-op">Status</h3>
					</div>

                

					<div class="items" >
						<div class="item1">
							<h3 class="t-op-nextlvl">1</h3>
							<h3 class="t-op-nextlvl">Benefits Of Reading</h3>
							<h3 class="t-op-nextlvl">www.Educationalblog.com/blog/benefits Of Reading </h3>
							<h3 class="t-op-nextlvl">7.3k</h3>
							<h3 class="t-op-nextlvl">Saroj123</h3>
							<h3 class="t-op-nextlvl">https://picsum.photos/id/237/536/354</h3>
							<h3 class="t-op-nextlvl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id quisquam est quis dolorum voluptas repudiandae maiores, rerum fuga sequi, in ex tenetur libero excepturi enim magnam cum delectus accusamus repellat.</h3>
							<h3 class="t-op-nextlvl">3/22/2023</h3>
							<h3 class="t-op-nextlvl">5/22/2023</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>


					</div>
				</div> -->

	<table class="data-table">

  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Link</th>
      <th>Views</th>
      <th>Author</th>
      <th>Image</th>
      <th>Description</th>
      <th>Created</th>
      <th>Expires</th>
      <th>Status</th>
    </tr>
  </thead>

  <tbody class="scrollbar" style="width: 100%;
  overflow-x: auto;">>
    <tr>
      <td>1</td>
      <td>Benefits Of Reading</td>
      <td><a href="https://www.educationalblog.com/blog/benefits-of-reading">https://www.educationalblog.com/blog/benefits-of-reading</a></td>
      <td>7.3k</td>
      <td>Saroj123</td>
      <td><img src="https://picsum.photos/id/237/536/354" alt="Random image"></td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam est quis dolorum voluptas repudiandae maiores, rerum fuga sequi, in ex tenetur libero excepturi enim magnam cum delectus accusamus repellat.</td>
      <td>3/22/2023</td>
      <td>5/22/2023</td>
      <td>Published</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Benefits Of Writting</td>
      <td><a href="https://www.educationalblog.com/blog/benefits-of-reading">https://www.educationalblog.com/blog/benefits-of-writting</a></td>
      <td>2.3k</td>
      <td>User234</td>
      <td><img src="https://picsum.photos/id/237/536/354" alt="Random image"></td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quisquam est quis dolorum voluptas repudiandae maiores, rerum fuga sequi, in ex tenetur libero excepturi enim magnam cum delectus accusamus repellat.</td>
      <td>3/22/2023</td>
      <td>5/22/2023</td>
      <td style="background-color:red;">Not Published</td>
    </tr>
  </tbody>
</table>

			</div>




<!-- Custom CRUD Datatables Started  -->

            <script>
                jQuery(document).ready(function($) {
                    var table = $('#table').DataTable({
                        responsive: true,
                        pageLength: 15,
                        lengthMenu: [15, 30, 50, 100],
                        footerCallback: function (row, data, start, end, display) {
                            var api = this.api(), data;

                            data = {
                                'action': 'datatables_page_length',
                                'total': api.page.info().total,
                                'page': api.page.info().page,
                                'data': api.page.info().data
                            };

                            return api.page.info().display(data);
                        }
                    });
                });
</script>



				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div> 







	<!-- Edit Modal HTML -->


	<!-- <div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div> -->



	<!-- Edit Modal HTML -->



<!-- 


	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div> -->








	<!-- Delete Modal HTML -->



<!--     
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div> -->





<!-- Custom Crud datatables end  -->



		</div>
	</div>

	<!-- <script src="./index.js"></script> -->
 
 <script>
let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click",()=>
{
	nav.classList.toggle("navclose");
})
</script>

<!-- datatable js code  Started-->
<!-- <script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script> -->
<!-- Datatable js code ends here -->

  
</body>
</html>


</x-app-layout>
