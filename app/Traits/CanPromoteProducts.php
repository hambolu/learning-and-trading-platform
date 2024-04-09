<?php

namespace App\Traits;

use App\Models\Product;

trait CanPromoteProducts
{
    /**
     * Add a product to the user's store for promotion.
     *
     * @param Product $product
     * @return void
     */
    public function addProductToStore(Product $product)
    {
        // Add logic here to associate the product with the user's store
        // For example, you can store the product ID in a pivot table
        $this->products()->attach($product);
    }

    /**
     * Remove a product from the user's store.
     *
     * @param Product $product
     * @return void
     */
    public function removeProductFromStore(Product $product)
    {
        // Add logic here to disassociate the product from the user's store
        // For example, you can remove the product ID from the pivot table
        $this->products()->detach($product);
    }

    /**
     * Get the user's promoted products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function promotedProducts()
    {
        return $this->belongsToMany(Product::class, 'user_promoted_products')->withTimestamps();
    }

    // Other promotion-related methods as needed
}
