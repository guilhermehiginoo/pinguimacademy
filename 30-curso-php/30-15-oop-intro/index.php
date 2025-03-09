<!doctype html>
<html lang="en">
<?php $title = 'Classes - O Básico'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>

<?php
class Pessoa
{
    public ?string $nacionalidade = null;

    public function __construct(
        protected string $nome,
        protected int $idade,
        protected string $corDoCabelo
    ) {
        $this->setCorDoCabelo($corDoCabelo);
    }

    public function andar(): string
    {
        return $this->nome . ' está andando...';
    }

    public function falar(): string
    {
        return $this->nome . ' está falando...';
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function idade(): int
    {
        return $this->idade;
    }

    public function corDoCabelo(): string
    {
        return $this->corDoCabelo;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function setCorDoCabelo(string $corDoCabelo): self
    {
        if (!in_array($corDoCabelo, ['loiro', 'preto', 'castanho', 'ruivo'])) {
            throw new \InvalidArgumentException('Cor de cabelo inválida');
        }

        $this->corDoCabelo = $corDoCabelo;

        return $this;
    }
}

$pessoa = new Pessoa(
    nome: 'Matheus',
    idade: 31,
    corDoCabelo: 'preto'
);

var_dump($pessoa);

echo "<br><br>";

$pessoa->nacionalidade = 'brasileiro';
$pessoa->setNome('John Doe');
$pessoa->setIdade(25);
$pessoa->setCorDoCabelo('loiro');

var_dump($pessoa);

echo "<br><br>";

echo $pessoa->andar() . '<br>';
echo $pessoa->falar() . '<br>';
echo $pessoa->nome() . '<br>';
echo $pessoa->idade() . '<br>';
echo $pessoa->corDoCabelo() . '<br>';
?>
</body>
</html>