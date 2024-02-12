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

  public function write( string $message, string $color )
  {
    echo $this->styles[$color] . $message;
  }

  /**
   * Handle when arguments passed to terminal are not enough
   * For example: `php buddy `
   * 
   * @param int $all_arguments All arguments passed from terminal
   */
  public function handle_min_argument(int $all_arguments)
  {
    if ( $all_arguments < 2 ) {
      $this->write( "Two few arguments!", "red" );
      exit(1);
    }
  }

}