<?php
class Restaurant {
    private int $restaurantId;
    private string $restaurantName;
    private string $category;
    private float $score;
    private int $review;
    private string $priceRange;
    private string $picture;

    public function getRestaurantId(): int {
        return $this->restaurantId;
    }

    public function setRestaurantId(int $restaurantId): void {
        $this->restaurantId = $restaurantId;
    }

    public function getRestaurantName(): string {
        return $this->restaurantName;
    }

    public function setRestaurantName(string $restaurantName): void {
        $this->restaurantName = $restaurantName;
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }

    public function getScore(): float {
        return $this->score;
    }

    public function setScore(float $score): void {
        $this->score = $score;
    }

    public function getReview(): int {
        return $this->review;
    }

    public function setReview(int $review): void {
        $this->review = $review;
    }

    public function getPriceRange(): string {
        return $this->priceRange;
    }

    public function setPriceRange(string $priceRange): void {
        $this->priceRange = $priceRange;
    }

    public function getPicture(): string {
        return $this->picture;
    }

    public function setPicture(string $picture): void {
        $this->picture = $picture;
    }
}