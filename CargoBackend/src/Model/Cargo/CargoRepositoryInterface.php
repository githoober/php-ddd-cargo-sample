<?php
/*
 * This file is part of the prooph/php-ddd-cargo-sample package.
 * (c) Alexander Miertsch <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Codeliner\CargoBackend\Model\Cargo;

use CargoBackend\Model\Cargo\TrackingId;

/**
 * CargoRepository to load and store Cargos
 * 
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
interface CargoRepositoryInterface
{
    /**
     * Finds a cargo using given id.
     * 
     * @param TrackingId $trackingId Id
     * @return Cargo if found, else {@code null}
     */
    public function get(TrackingId $trackingId);
    
    /**
     * List all cargo.
     * 
     * @return Cargo[] List of all Cargo
     */
    public function getAll(): array;
    
    /**
     * Saves given cargo.
     * 
     * @param Cargo $cargo Cargo to save
     */
    public function store(Cargo $cargo);
    
    /**
     * @return TrackingId A unique, generated tracking Id.
     */
    public function getNextTrackingId(): TrackingId;
}
