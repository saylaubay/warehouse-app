<?php

namespace App\Http\Controllers;

use App\Repositories\ClientRepository;
use App\Services\CategoryService;
use App\Services\ClientService;
use App\Services\CurrencyService;
use App\Services\InputService;
use App\Services\MeasurementService;
use App\Services\OutputProductService;
use App\Services\OutputService;
use App\Services\ProductService;
use App\Services\RoleService;
use App\Services\StockService;
use App\Services\SupplierService;
use App\Services\UserService;
use App\Services\WarehouseService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $categoryService;
    protected $clientService;
    protected $currencyService;
    protected $inputService;
    protected $measurementService;
    protected $outputProductService;
    protected $outputService;
    protected $productService;
    protected $roleService;
    protected $stockService;
    protected $supplierService;
    protected $userService;
    protected $warehouseService;

    public function __construct(
        CategoryService $categoryService,
        ClientService $clientService,
        CurrencyService $currencyService,
        InputService $inputService,
        MeasurementService $measurementService,
        OutputProductService $outputProductService,
        OutputService $outputService,
        ProductService $productService,
        RoleService $roleService,
        StockService $stockService,
        SupplierService $supplierService,
        UserService $userService,
        WarehouseService $warehouseService
    )
    {
        $this->categoryService = $categoryService;
        $this->clientService = $clientService;
        $this->currencyService = $currencyService;
        $this->inputService = $inputService;
        $this->measurementService = $measurementService;
        $this->outputProductService = $outputProductService;
        $this->outputService = $outputService;
        $this->productService = $productService;
        $this->roleService = $roleService;
        $this->stockService = $stockService;
        $this->supplierService = $supplierService;
        $this->userService = $userService;
        $this->warehouseService = $warehouseService;
    }


}
