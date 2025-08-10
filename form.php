<?php include "inc/header.php";?>
    <div class="w-full  max-w-md mx-auto">
        <form action="create.php" enctype="multipart/form-data" method="post" class="w-[300px]">
            <div class="flex flex-col gap-2 py-1">
                <label for="name">Username</label>
                <label class="w-full">
                    <input type="text" name="name" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div>
            <div class="flex flex-col gap-2 py-1">
                <label for="email">Email</label>
                <label class="w-full">
                    <input type="email" name="email" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div> <div class="flex flex-col gap-2 py-1">
                <label for="country">Country</label>
                <label class="w-full">
                    <input type="text" name="country" class="focus:outline-none border border-gray-400 px-8 py-2 rounded-md w-full">
                </label>
            </div>
            <div class="flex flex-col gap-2 py-1">
                <button class="w-full bg-teal-500 text-white font-bold py-2.5 cursor-pointer">Send</button>
            </div>

        </form>
    </div>
<?php include "inc/footer.php";?>