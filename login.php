{\rtf1\ansi\ansicpg1252\cocoartf2709
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
session_start();\
\
if ($_SERVER['REQUEST_METHOD'] === 'POST') \{\
    $username = $_POST['username'];\
    $password = $_POST['password'];\
\
    if ($username === 'admin' && $password === \'91admin\'92) \{\
        $_SESSION['username'] = $username;\
        header('Location: main.php');\
        exit();\
    \} else \{\
        // Invalid login credentials, redirect back to the login page with an error message\
        header('Location: login.php?error=Invalid%20username%20or%20password');\
        exit();\
    \}\
\}\
?>\
}