namespace kore {

	// -- INSERTION SORT -- //
	template <typename T>
	KORE_EX void insertionSort(T* array_in, int array_size)
	{
		for (int i = 1; i <= array_size - 1; ++i)
		{
			int j = i - 1;
			T temp = array_in[i];

			while ((j >= 0) && (temp < array_in[j]))
			{
				array_in[j + 1] = array_in[j];
				j--;
			}
			array_in[j + 1] = temp;
		}
	}
}