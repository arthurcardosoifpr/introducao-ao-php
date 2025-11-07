<?php

echo 'Tente adivinhar qual o número correto de 0 à 100 com 10 tentativas' . PHP_EOL;

for ($i = 0; $i < 10; $i++){

	$chute = (int) readline('Digite um número: ');

	if ($chute == 42 && $i < 5){
        	print('INCRÍVEL, VOCÊ É MUITO BOM NISSO, VOCÊ ACERTOU COM MENOS DE 5 TENTATIVAS!!!' . PHP_EOL);
		break;
        } else if ($chute == 42 && $i >= 5 && $i < 7){
                print('Você é bom nesse jogo, meus parabéns, você acertou na ' . $i + 1 . 'ª tentativa!' . PHP_EOL);
                break;
        } else if ($chute == 42 && $i >= 7){
                print('Parabéns, você acertou na ' . $i + 1 . 'ª tentativa' . PHP_EOL);
                break;
	} else if ($chute < 42 && $i < 9){
        	print('tente novamente, o número é maior e restam ' . 9 - $i . ' tentativas' . PHP_EOL);
	} else if ($chute > 42 && $i < 9){
                print('tente novamente, o número é menor e restam ' . 9 - $i . ' tentativas' . PHP_EOL);
	}

}

?>
