# Custom PHP CLI Tool

This is a custom PHP command-line interface (CLI) tool designed to perform various tasks. It supports modular commands, and you can extend it with additional functionality.

## Usage
```bash
php cli <command>
```

Replace `<command>` with one of the available commands listed below.

## Available Commands

- **make**
  - `model`: Create a new model.
  - `controller`: Create a new controller.
  
## Adding Custom Commands

To add a new command, follow these steps:

1. Create a new PHP file in the `Commands` directory with the command name (e.g., `MyCommand.php`).

2. Update the `$commands` array in the main script to include the new command.

3. Run the CLI tool with the new command.

## Example

```bash
php cli make:model
```

This will execute the "make:model" command, creating a new model as per your implementation. Here `make` is Main command class and `model` is a method of that class.

## Help

If you are unsure about the available commands or their usage, run the following command:
```bash
php cli
```
This will display a list of available commands and their respective sub-commands.

## Contributing

Feel free to contribute by adding new commands or improving existing ones. Follow the steps mentioned above for adding custom commands.

## License

This project is licensed under the [MIT License](LICENSE).


