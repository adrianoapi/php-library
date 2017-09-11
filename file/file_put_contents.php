<?php

# Copia o conteúdo de soruce para target
#file_put_contents("target.txt", fopen("source.txt", "r"));

# Lê e copia o total de caracteres do conteúdo de soruce para target
#file_put_contents("target.txt", readfile("source.txt"));

# Copia o conteúdo de soruce para target acrescentando a instrução definida
#file_put_contents("target.txt", join(file("source.txt"), "\n"));

# Copia o conteúdo de soruce para target
#file_put_contents("target.txt", file_get_contents("source.txt"));

# Copia o conteúdo de soruce para target
echo $handle = fopen("target.txt", "w+"); fwrite($handle, file_get_contents("source.txt")); fclose($handle);
