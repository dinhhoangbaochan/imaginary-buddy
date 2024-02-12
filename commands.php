<?php

class Console {

  private $styles = [
    'default' => "\033[0m",
    'red'     => "\033[0;31m",
    'green'   => "\033[0;32m",
    'yellow'  => "\033[0;33m",
    'blue'    => "\033[0;34m",
    'magenta' => "\033[0;35m",
    'cyan'    => "\033[0;36m",
    'bold'    => "\033[1m",
  ];

  private $allowed_actions = ["help", "check", "make"];

  public function write( string $message, string $color )
  {
    echo $this->styles[$color] . $message;
  }

  /**
   * Handle when arguments passed to terminal are not enough
   * For example: `php buddy `
   * 
   * @param int $total_argument The total amount of arguments passed from terminal
   */
  public function handle_min_argument(int $total_argument)
  {
    if ( $total_argument < 2 ) {
      $this->write( "Two few arguments!", "red" );
      exit(1);
    }
  }

  public function handle_invalid_argument(int $total_argument, string $action)
  {
    if ( $total_argument >= 2 && ! in_array( $action, $this->allowed_actions )  ) {
      $this->write( "Invalid action!", "red" );
      $this->write( "Please check document again for allowed actions!", "yellow" );
    }
  }

}