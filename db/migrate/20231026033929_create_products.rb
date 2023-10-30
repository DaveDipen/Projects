class CreateProducts < ActiveRecord::Migration[7.0]
  def change
    create_table :products do |t|
      t.string :name
      t.decimal :price
      t.string :category
      t.text :description
      t.decimal :quantity

      t.timestamps
    end
  end
end
