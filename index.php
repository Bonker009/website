<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://seeklogo.com/images/M/mugiwara-logo-303FD55C54-seeklogo.com.png" type="image/x-icon">
    <title>East Blue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">
   <?php include("./components/UI/header.php") ?>
    <main>
        <section class="flex flex-col sm:flex-row p-20 justify-between items-center">
            <div class="w-1/2 flex gap-10 flex-col items-start" >
                <h1 class="font-bold text-5xl text-slate-700">
                    Welcome To My World
                </h1>
                <p class="font-semibold text-slate-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam animi dolorum perferendis dignissimos perspiciatis assumenda. Provident nihil, sit quasi veniam repudiandae laborum aliquid quidem obcaecati vitae nobis amet delectus eos?
                </p>
                <button class="bg-blue-600 p-2 px-7 rounded-md font-semibold text-white hover:opacity-70 duration-500 transition-all shadow drop-shadow-2xl">
                    <a href="aboutUs.php">About Us</a>
                </button>
            </div>
            <div class="w-1/2 drop-shadow-2xl">
                <img class="rounded-lg" src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.1.535868344.1696126104&semt=ais" alt="">
            </div>
        </section>
    </main>
    <?php include("./components/UI/footer.php") ?>
</body>

</html>