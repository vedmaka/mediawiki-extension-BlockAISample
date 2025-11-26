This repository implements a custom MediaWiki extension that adds a custom evaluation rule to [Block AI](https://github.com/vedmaka/mediawiki-extension-BlockAI?tab=readme-ov-file) MediaWiki extension

In order to create a new evaluation rule, following the steps:

1. Create new MediaWiki extension or fork this repository
2. Create new class in `includes/Evals`
3. Make sure the namespace is loaded in `extension.json` via `AutoloadNamespaces`
4. Add the class name and namespaced class name to the `extension.json` under `attributes` section

```json
{
...
"attributes": {
  "BlockAI": {
    "Evals": {
      "BlockAISample": "MediaWiki\\Extension\\BlockAISample\\Evals\\BlockAISample"
    }
  },
...
}
```

5. Load your extension in `LocalSettings.php` via `wfLoadExtension('BlockAISample`);
6. Done
