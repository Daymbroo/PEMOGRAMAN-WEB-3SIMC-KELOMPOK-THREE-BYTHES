using Dapper;
using MySql.Data.MySqlClient; // Pastikan Anda menggunakan MySql.Data
using Microsoft.Extensions.Configuration;
using System.Collections.Generic;
using System.Threading.Tasks;
using expo3.Models;
using Microsoft.Extensions.Logging;

public class ProdukRepository
{
    private readonly string _connectionString;
    private readonly ILogger<ProdukRepository> _logger;

    public ProdukRepository(IConfiguration configuration, ILogger<ProdukRepository> logger)
    {
        _connectionString = configuration.GetConnectionString("DefaultConnection");
        _logger = logger;
    }

    // Mengambil semua produk
    public async Task<IEnumerable<Produk>> GetAllProduks()
    {
        try
        {
            using (var connection = new MySqlConnection(_connectionString))
            {
                await connection.OpenAsync();
                return await connection.QueryAsync<Produk>("SELECT * FROM Produks");
            }
        }
        catch (MySqlException ex)
        {
            _logger.LogError(ex, "Error retrieving products from database.");
            throw; // Melempar kembali pengecualian yang sama
        }
        catch (Exception ex)
        {
            _logger.LogError(ex, "An unexpected error occurred.");
            throw; // Melempar kembali pengecualian yang sama
        }
    }

    // Mengambil produk berdasarkan nama
    public async Task<Produk> GetProdukByName(string nama)
    {
        using (var connection = new MySqlConnection(_connectionString))
        {
            await connection.OpenAsync();
            return await connection.QueryFirstOrDefaultAsync<Produk>(
                "SELECT * FROM Produks WHERE Nama = @Nama",
                new { Nama = nama }
            );
        }
    }

    // Menambahkan produk baru
    public async Task AddProduk(Produk produk)
    {
        using (var connection = new MySqlConnection(_connectionString))
        {
            await connection.OpenAsync();
            var sql = "INSERT INTO Produks (Nama, Kategori, HargaJual, HargaBeli, Deskripsi, Foto) VALUES (@Nama, @Kategori, @HargaJual, @HargaBeli, @Deskripsi, @Foto)";
            await connection.ExecuteAsync(sql, produk);
        }
    }

    // Memperbarui produk yang ada
    public async Task<bool> UpdateProduk(Produk produk)
    {
        using (var connection = new MySqlConnection(_connectionString))
        {
            await connection.OpenAsync();
            var sql = "UPDATE Produks SET Kategori = @Kategori, HargaJual = @HargaJual, HargaBeli = @HargaBeli, Deskripsi = @Deskripsi, Foto = @Foto WHERE Nama = @Nama"; // Menggunakan Nama untuk pembaruan
            var result = await connection.ExecuteAsync(sql, produk);
            return result > 0; // Mengembalikan true jika ada baris yang diperbarui
        }
    }

    // Menghapus produk berdasarkan nama
    public async Task<bool> DeleteProduk(string nama)
    {
        using (var connection = new MySqlConnection(_connectionString))
        {
            await connection.OpenAsync();
            var sql = "DELETE FROM Produks WHERE Nama = @Nama";
            var result = await connection.ExecuteAsync(sql, new { Nama = nama });
            return result > 0; // Mengembalikan true jika ada baris yang dihapus
        }
    }
}