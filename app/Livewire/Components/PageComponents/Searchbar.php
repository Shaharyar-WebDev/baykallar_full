<?php

namespace App\Livewire\Components\PageComponents;

use Livewire\Component;

class Searchbar extends Component
{
    
     public string $search = '';

    //  public function updatedSearch(){
    //     dd($this->search);
    //  }
    
    public function render()
    {
        $products = [
            ['name' => 'Brake Pad', 'description' => 'Front brake pad', 'price' => 1200, 'image' => 'https://via.placeholder.com/56'],
            ['name' => 'Brake Pad', 'description' => 'Front brake pad', 'price' => 1200, 'image' => 'https://via.placeholder.com/56'],
            ['name' => 'Brake Pad', 'description' => 'Front brake pad', 'price' => 1200, 'image' => 'https://via.placeholder.com/56'],
            ['name' => 'Engine Oil', 'description' => 'Synthetic 5W-30', 'price' => 850, 'image' => 'https://via.placeholder.com/56'],
            ['name' => 'Air Filter', 'description' => 'High performance', 'price' => 400, 'image' => 'https://via.placeholder.com/56'],
        ];

        $results = [];

        if (strlen($this->search) > 1) {
            $results = collect($products)->filter(function ($item) {
                return stripos($item['name'], $this->search) !== false;
            })->values();
        }

        return view('livewire.components.page-components.searchbar', [
            'results' => $results,
        ]);
    }
}
