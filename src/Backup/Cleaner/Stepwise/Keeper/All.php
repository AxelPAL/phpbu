<?php
namespace phpbu\App\Backup\Cleaner\Stepwise\Keeper;

use phpbu\App\Backup\Cleaner\Stepwise\Keeper;
use phpbu\App\Backup\File;

/**
 * Keep all class
 *
 * @package    phpbu
 * @subpackage Backup
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  Sebastian Feldmann <sebastian@phpbu.de>
 * @license    https://opensource.org/licenses/MIT The MIT License (MIT)
 * @link       http://phpbu.de/
 * @since      Class available since Release 5.0.0
 */
class All implements Keeper
{
    /**
     * Decides if given file should be kept.
     *
     * @param  \phpbu\App\Backup\File $file
     * @return bool
     */
    public function keep(File $file) : bool
    {
        return true;
    }
}
