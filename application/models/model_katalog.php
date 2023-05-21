<?php
class Model_Katalog extends Model
{
	public function get_data()
	{	
		// Здесь мы просто симулируем реальные данные.
		return array(
			array(
				'id' => '1',
				'link' => 'images/001.jpg',
				'description' => 'Соломенная Кровля'
			),
			array(
				'id' => '2',
				'link' => 'images/002.jpg',
				'description' => 'Профлист'
			),
			array(
				'id' => '3',
				'link' => 'images/003.jpg',
				'description' => 'Металлочерепица'
			),
			array(
				'id' => '4',
				'link' => 'images/004.jpg',
				'description' => 'Фальцевая Кровля'
			),
			array(
				'id' => '5',
				'link' => 'images/005.jpg',
				'description' => 'Гибкая черепица'
			),
			array(
				'id' => '6',
				'link' => 'images/006.jpg',
				'description' => 'Натуральная черепица'
			),
		);
	}
}