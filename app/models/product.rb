class Product < ApplicationRecord
    validates :name, presence: true
	validates :price, presence: true
	validates :category, presence: true
  	validates :description, presence: true, length: { minimum: 10 }
  	validates :quantity, presence:true
end
