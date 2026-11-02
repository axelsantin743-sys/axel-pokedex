<?php
$pokemonId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$pokemonName = trim((string) ($_GET['name'] ?? ''));
$pokemonType = trim((string) ($_GET['type'] ?? ''));
$pokemonHeight = trim((string) ($_GET['height'] ?? ''));
$pokemonWeight = trim((string) ($_GET['weight'] ?? ''));

$escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
$title = $pokemonName !== '' ? $pokemonName : ($pokemonId ? 'Pokémon #' . $pokemonId : 'Pokémon');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $escape($title) ?> — Pokédex</title>
	<style>
		body { margin: 0; padding: 2rem; font-family: Arial, sans-serif; background: #f3f4f6; color: #222; }
		main { max-width: 600px; margin: 2rem auto; padding: 2rem; background: #fff; border-radius: 12px; box-shadow: 0 4px 16px #0001; }
		h1 { margin-top: 0; text-transform: capitalize; }
		dl { display: grid; grid-template-columns: max-content 1fr; gap: .75rem 1.5rem; }
		dt { font-weight: bold; }
		a { color: #d33; }
	</style>
</head>
<body>
<main>
	<a href="index.php">← Retour au Pokédex</a>
	<h1><?= $escape($title) ?></h1>
	<?php if ($pokemonId || $pokemonType !== '' || $pokemonHeight !== '' || $pokemonWeight !== ''): ?>
		<dl>
			<?php if ($pokemonId): ?><dt>Numéro</dt><dd>#<?= (int) $pokemonId ?></dd><?php endif; ?>
			<?php if ($pokemonType !== ''): ?><dt>Type</dt><dd><?= $escape($pokemonType) ?></dd><?php endif; ?>
			<?php if ($pokemonHeight !== ''): ?><dt>Taille</dt><dd><?= $escape($pokemonHeight) ?></dd><?php endif; ?>
			<?php if ($pokemonWeight !== ''): ?><dt>Poids</dt><dd><?= $escape($pokemonWeight) ?></dd><?php endif; ?>
		</dl>
	<?php else: ?>
		<p>Aucun détail de Pokémon n’a été fourni.</p>
	<?php endif; ?>
</main>
</body>
</html>
