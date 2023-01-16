<?php include('inc/header.php'); ?>

<div class="content">
    <h2>Static VS Dynamic Type Systems</h2>
    <div class="flex-wrap">
        <div class="flex-item">
            <p>
                In <b>statically typed systems</b>, the types of all variable must be known at compile time. This means that a variable can only have one fixed type. A variable declared as integer for example, cannot later be assigned to a string or a float. The advantage of statically typed languages is that the compiler can catch type errors during compilation. Generally, compilers can also generate more efficient code for statically typed languages, since every type is already known at compile time.
            </p>
            <p>
                <b>Dynamically typed systems</b>, on the other hand, are characterized by the fact that the types of variables can change depending on what is assigned to them. This means that types are associated with values, not variables. A programmer can for example first assign the value 17 to a variable, and later change its value to the string "seventeen". For those languages, type checking is generally done at run time.
            </p>
            <p>
                What is <b>type inference</b> then? Even in statically typed languages, variable types do not always need to be specifically declared. This is where type inference steps in. This functionality allows the compiler to automatically assign variable types to variables. This means that if a variable is given the value 16, the compiler is able to determine that it is an integer.
            </p>
            <p>
                <b>Duck typing</b> is another concept related to the type system. The term is a reference to the duck test, which states that:<br>
                <q>If it looks like a duck, swims like a duck, and quacks like a duck, then it probably is a duck.</q><br>
                Duck typing refers to the principle of not constraining code to specific data types. Instead of checking if the object type is correct, the compiler/interpreter will simply check if the called methods are the same, an if so, run the code. It will only throw an error if the method is not defined for the invoked object. In other words, an operation does not formally specify the requirements that its operands have to meet, but simply tries it out with what is it given. The example below, written in Python, illustrates duck  typing:
                <?php include('inc/snippet.php'); ?>
            </p>
            <img src="img/Donald_Duck_angry_transparent_background.png" alt="">
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>